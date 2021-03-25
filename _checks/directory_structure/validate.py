# Copyright 2021-present, Adobe. All rights reserved.
# This file is licensed to you under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License. You may obtain a copy
# of the License at http://www.apache.org/licenses/LICENSE-2.0

# Unless required by applicable law or agreed to in writing, software distributed under
# the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR REPRESENTATIONS
# OF ANY KIND, either express or implied. See the License for the specific language
# governing permissions and limitations under the License.

import sys
import glob
import fnmatch

# Declare global variables
EXIT_CODE = 0
EXCLUDE_MASK = [
    './src/**/**/*.md',
    './src/**/**/assets/*.*',
    './_checks/*',
    './COPYING.txt',
    './LICENSE.txt',
    './src/TESTING/*.*',
    './README.md'
]
TERM_COLORS = {
    'purple': '\033[95m',
    'blue': '\033[94m',
    'cyan': '\033[96m',
    'green': '\033[92m',
    'yellow': '\033[93m',
    'red': '\033[91m',
    'bold': '\033[1m',
    'underscore': '\033[4m',
    'reset': '\033[0m'
}


def build_file_list(start_dir: str = "./",
                    file_mask: str = "**/**.*",
                    exclude_list: list = None,
                    recursive: bool = False) -> list:
    """
    Build the file list for the given directory by mask

    :param start_dir: A path to the directory to load files from
    :param file_mask: File mask
    :param exclude_list: An exclude map list
    :param recursive: Load files recursively
    :return: The list of files from the given directory
    :rtype: list
    """
    if exclude_list is None:
        exclude_list = []
    filenames = []
    for filename in glob.iglob(start_dir + file_mask, recursive=recursive):
        filenames.append(filename)

    return exclude_files_from_list(filenames, exclude_list)


def exclude_files_from_list(file_list: list, exclude_list: list) -> list:
    """
    Apply exclude list to the list of files

    :param file_list: The list of files
    :param exclude_list: The list of exclude masks
    :return: The filtered list of files
    """
    filtered_list = []
    for file in file_list:
        for exclude in exclude_list:
            if fnmatch.fnmatch(file, exclude):
                filtered_list.append(file)

    return [item for item in file_list if item not in set(filtered_list)]


failed_files = build_file_list(
    start_dir='./',
    file_mask="**/**.*",
    exclude_list=EXCLUDE_MASK,
    recursive=True)

if len(failed_files):
    EXIT_CODE = 1
    print(f"{TERM_COLORS['red']}"
          f"The following files did fail the directory structure integrity test:"
          f"{TERM_COLORS['reset']}")
    print(f"\n".join(failed_files))
    print(f"\n")
    print(f"{TERM_COLORS['purple']}"
          f"MD files must be placed according to the following directory structure:\n"
          f"{TERM_COLORS['reset']}"
          f"./src/[Category Name Directory]/[Section Name Directory]/\n")
    print(f"{TERM_COLORS['purple']}"
          f"Asset files must be placed according to the following directory structure:\n"
          f"{TERM_COLORS['reset']}"
          f"./src/[Category Name Directory]/[Section Name Directory]/assets/\n")
else:
    print(f"{TERM_COLORS['green']}"
          f"File Structure test has been passed."
          f"{TERM_COLORS['reset']}")

sys.exit(EXIT_CODE)
