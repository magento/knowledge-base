import { exists } from "https://deno.land/std@0.98.0/fs/mod.ts"
import { join } from "https://deno.land/std@0.98.0/path/mod.ts"
import { green, red } from "https://deno.land/std@0.98.0/fmt/colors.ts"

const basePath = "src"
let errorCount = 0
const excludeRegexes: RegExp[] = []

// Iterate over the categories, these should have a .group.json
for await (const entry of Deno.readDir(basePath)) {
    const categoryPath = join(basePath, entry.name)
    const categoryJson = join(categoryPath, '.group.json')

    // Skip files and symlinks
    if (!entry.isDirectory) continue
    // Skip folders that shouldn't be searched through
    if (shouldExclude(categoryPath)) continue

    // Show a warning if the category.json doesn't exist.
    if (!await exists(categoryJson)) {
        warn(categoryPath)
    }

    // Iterate over sections, these should also have a .group.json except for the `assets` folder
    for await (const entry of Deno.readDir(categoryPath)) {
        const sectionPath = join(categoryPath, entry.name)
        const sectionJson = join(sectionPath, '.group.json')

        if (!entry.isDirectory) continue
        if (shouldExclude(sectionPath)) continue

        if (!await exists(sectionJson)) {
            warn(sectionPath)
        }
    }
}

if (errorCount === 0) {
    console.log(`✔️ All categories and sections are ${green("valid.")}`)
} else {
    console.log(`\n${red(errorCount + '')} categories/sections are invalid.`)
}


function warn(path: string) {
    errorCount++
    console.error(`The ${red(path)} folder is missing a .group.json file!`)
}

function shouldExclude(path: string) {
    return excludeRegexes.some(reg => reg.test(path))
}
