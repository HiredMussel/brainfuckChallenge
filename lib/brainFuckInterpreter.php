<?php
/**
 * Interpreter for the brainfuck programming language
 * 
 * @param Array $program the brainfuck program to run
 * @param Array $dataArray the initial state of the program memory
 * 
 * @return Array all information printed to output
 */
function runBrainFuck(Array $program, Array $dataArray=[]) : Array {
    $dataPointer = 0;
    $instructionPointer = 0;
    $output = [];

    while(isset($program[$instructionPointer])) {
        $instruction = $program[$instructionPointer];
        switch ($instruction) {
            case '>':
                $dataPointer++;
            break;
            case '<':
                $dataPointer--;
            break;
            case '+':
                $dataArray[$dataPointer]++;
            break;
            case '-':
                $dataArray[$dataPointer]--;
            break;
            case '.':
                $output[] = $dataArray[$dataPointer];
            break;
            case '[':
                if (!$dataArray[$dataPointer]) {
                    while ($program[$instructionPointer] != ']') {
                        $instructionPointer++;
                    }
                }
            break;
            case ']':
                if ($dataArray[$dataPointer]) {
                    while ($program[$instructionPointer] != '[') {
                        $instructionPointer--;
                    }
                }
            break;
        }
        $instructionPointer++;
    }
    return $output;
}