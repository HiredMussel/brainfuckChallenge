<?php

$program_string = '>.<[->+.<]>>[-<-.>]';
/**
 * This program does the following:
 * Move the data pointer right, so that it is pointing at zero
 * Output the value at the data pointer, since we need to output an extra zero at the beginning
 * Move the data pointer left so that it is pointing at a value of 1000
 * Begin the first loop:
 * Decrement the value at memory address 0, which serves as our counter for the first loop
 * Move to memory address 1, which is the value we will be outputting
 * Increment the value to output, then output that value
 * Move the pointer back to memory address 1 so that we are checking how many iterations of this
 * loop we have left
 * If we still have iterations (the value at address zero is nonzero) then jump back to the last '['
 * symbol and thus repeat the loop
 * Once the first loop is complete, move the pointer to memory address 2 and perform a second loop which
 * functions in more or less the same way except that it is repeatedly decrementing the value to output
 */
$brainfuck_program = str_split($program_string);
$brainfuck_memory = [1000, 0, 1000];