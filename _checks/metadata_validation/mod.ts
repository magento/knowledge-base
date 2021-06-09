import { walk } from "https://deno.land/std@0.98.0/fs/mod.ts"
import { parse } from "https://deno.land/std@0.98.0/encoding/yaml.ts"
import { cyan, green, red } from "https://deno.land/std@0.98.0/fmt/colors.ts"

if (import.meta.main) {
    // Return with a non-zero exit code to indicate to GitHub Actions that this test failed.
    const allPassed = await validateFrontmatter()
    if (!allPassed) Deno.exit(1)
}

/**
 * Run some checks against Markdown frontmatter. Returns a boolean indicating if all articles passed.
 * 
 * The beginning of an article should look like this (without the surrounding code block):
 *
 * ```markdown
 * ---
 * title: Article title
 * labels: article,labels
 * ---
 * Article content...
 * ```
 * 
 * The file should start with three dashes followed by a line break. Then there should be valid YAML with at least two keys, `title` and `labels`, followed by another set of three dashes. This function runs against all `.md` files in the `src` directory.
 */
async function validateFrontmatter() {
    let failedCount = 0
    let total = 0

    // Iterate through all markdown files asynchronously.
    for await (const entry of walk("src")) {
        // Skip files that aren't markdown
        if (!entry.isFile) continue
        if (!entry.name.endsWith('md')) continue

        total++

        try {
            // Determine if article starts with the frontmatter delimiter
            const text = await Deno.readTextFile(entry.path)
            if (!text.startsWith("---\n")) throw Error("This article does not contain the required frontmatter.")

            // Get the YAML
            const frontmatter = text.split("---\n")[1]
            if (!frontmatter) throw Error("This article doesn't contain the required frontmatter.")

            // If the frontmatter is valid, it will be parsed correctly by the YAML parser.
            const data = parse(frontmatter) as any
            if (!data) throw Error("Frontmatter exists, but there's no data in it. Add the required `title` and `labels` fields.")
            if (!data.title) throw Error("The title field is missing.")
            if (!data.labels) throw Error("The labels field is missing.")
        } catch (e) {
            failedCount++
            // Output both the path and error description.
            console.error(`${red("Invalid frontmatter")} at ${cyan(entry.path)}:`)
            console.error(e.message)
        }
    }

    if (failedCount === 0) {
        console.log(`✔️ All ${cyan(total + '')} articles contain ${green("valid")} metadata.`)
        return true
    } else {
        console.log(`\n${red(failedCount + '')} files contain errors (out of ${cyan(total + '')} files total).`)
        console.log(cyan("Please ensure that the frontmatter/metadata in the articles is valid. If a key or value contains a colon (:) or dash (-) character, wrap the entire value in \"quotes\" or use multiline strings (see https://yaml-multiline.info). Double-check that articles contain valid `title` and `labels` fields."))
        return false
    }
}
