import sys
import glob
import os
import fnmatch

# Declare global variables
ARTICLE_PATH_DEPTH = 4
EXCLUDE_FILES = [
    '.git/*',
    './src/TESTING/*.[mM][dD]',
    './README.md',
]


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


def validate_path_depth(file_list: list, depth: int) -> list:
    """
    Walks through the list of files and validate each record directory depth

    :param file_list: The list of file paths to validate
    :param depth: Acceptable directory depth
    :return: The list of files that didn't pass the validation
    :rtype: list
    """

    failed_files = []
    for file in file_list:
        path_elements = os.path.split(file)
        if len(path_elements[0].split(os.sep)) is not depth:
            failed_files.append(file)

    return failed_files


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

    filtered_list = set(filtered_list)
    return [item for item in file_list if item not in filtered_list]


failed_md_depths = validate_path_depth(
    file_list=build_file_list(
        start_dir="./",
        file_mask="**/**.[mM][dD]",
        exclude_list=EXCLUDE_FILES,
        recursive=True),
    depth=ARTICLE_PATH_DEPTH)

if len(failed_md_depths):
    print("The following MD files did fail the directory structure integrity test:")
    print("\n".join(failed_md_depths))
    sys.exit(1)
