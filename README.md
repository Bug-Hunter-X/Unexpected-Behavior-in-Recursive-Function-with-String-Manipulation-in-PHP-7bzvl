# PHP Recursive Function Bug

This repository demonstrates a bug in a PHP recursive function that processes nested arrays and manipulates strings. The function unexpectedly modifies the array structure when encountering strings starting with a specific character ('@').

## Bug Description
The `processData` function recursively iterates through a nested array. If a string value starts with '@', it's supposed to be processed and modified.  However, the implementation has a flaw leading to unexpected data changes in the array.

## Bug Reproduction
1. Clone this repository.
2. Run the `bug.php` file.
3. Observe the output, which shows unexpected changes in the array structure after processing.

## Solution
The solution involves modifying the recursive function to correctly handle string manipulation while preserving the original array structure.

## Solution Implementation
The solution is provided in `bugSolution.php`. The key change is to create a copy of the data before modifying it, preventing unexpected side effects.