import { walk } from "https://deno.land/std@0.98.0/fs/mod.ts"
import { parse } from "https://deno.land/std@0.98.0/encoding/yaml.ts"
import { cyan, green, red } from "https://deno.land/std@0.98.0/fmt/colors.ts"
// import { setFailed } from "https://cdn.skypack.dev/@actions/core?dts"

let failed = 0
let total = 0

// Iterate through all markdown files asynchronously.
for await (const entry of walk("src")) {
    total++
    if (!entry.isFile) continue
    if (!entry.name.endsWith('md')) continue

    const text = await Deno.readTextFile(entry.path)
    const frontmatter = text.split("---\n")[1]

    // If the frontmatter is valid, it will be parsed correctly by the yaml parser.
    try {
        const data = parse(frontmatter) as any
        if (!data) throw Error("Frontmatter is empty!")
        if (!(data.title)) throw Error("The title field is missing.")
        if (!(data.labels)) throw Error("The labels field is missing.")
    } catch (e) {
        failed++
        console.error(`${red("Invalid frontmatter")} at ${cyan(entry.path)}:`)
        console.error(e.message)
    }
}


if (failed === 0) {
    console.log(`✔️ All ${cyan(total + '')} articles contain ${green("valid")} metadata.`)
} else {
    console.log(`\n${red(failed + '')} files contain errors (out of ${cyan(total + '')} files total).`)
    console.log(cyan("Please ensure that the frontmatter/metadata in the articles is valid. If a key or value contains a colon (':') character, wrap it in \"quotes\"."))
    Deno.exit(1)
}
