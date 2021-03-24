import sys
import glob
import os

# Declare global variables
ARTICLE_PATH_DEPTH = 4
EXCLUDE_FILES = [
    '.git/',
    'README.MD'
]


def build_file_list(start_dir: str = "./", file_mask: str = "**/**.*", recursive: bool = False) -> list:
    """
    Build the file list for the given directory by mask

    :param start_dir: A path to the directory to load files from
    :param file_mask: File mask
    :param recursive: Load files recursively
    :return: The list of files from the given directory
    :rtype: list
    """
    filenames = []
    for filename in glob.iglob(start_dir + file_mask, recursive=recursive):
        filenames.append(filename)

    return filenames


def validate_path_depth(file_paths: list, depth: int) -> list:
    """
    Walks through the list of files and validate each record directory depth

    :param file_paths: The list of file paths to validate
    :param depth: Acceptable directory depth
    :return: The list of files that didn't pass the validation
    :rtype: list
    """

    failed_files = []
    for file in file_paths:
        path_elements = os.path.split(file)
        if len(path_elements[0].split(os.sep)) is not depth:
            failed_files.append(file)

    return failed_files


failed_md_depths = validate_path_depth(build_file_list("./", "**/**.[mM][dD]", True), ARTICLE_PATH_DEPTH)

if len(failed_md_depths):
    print("The following MD files did fail the directory structure integrity test:")
    print("\n".join(failed_md_depths))
    sys.exit(1)

