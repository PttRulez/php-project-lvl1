<?php

namespace Games\Progression;

use function cli\line;

function run($name)
{
    $row = [];
    $row[0] = rand(1, 10);
    $step = rand(1, 6);
    $hiddenIndex = rand(0, 9);
    $string = '';

    for ($j = 1; $j < 10; $j++) {
        $row[$j] = $row[$j - 1] + $step;
        if ($j == $hiddenIndex) {
            $string .= '.. ';
        } else {
            $string .= $row[$j] . ' ';
        }
    }

    line("Question: %s", $string);
    $answer = \cli\prompt('Your answer');

    if ($answer == $row[$hiddenIndex]) {
        line("Correct!");
        return true;
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $row[$hiddenIndex]);
        line("Let's try again, %s", $name);
        return false;
    }
}
