<?php

namespace Games\Prime;

use function cli\line;

function run($name)
{
        $number = rand(1, 1000);
        $d = 2;
        while ($number % $d != 0) {
            $d += 1;
        }
        $prime = ($d == $number);

        line("Question: %s", $number);
        $answer = \cli\prompt('Your answer');

        if (($answer == "yes" && $prime == true) || ($answer == "no" && $prime == false)) {
            line("Correct!");
            return true;
        } else {
            $correctAnswer = ($prime == true) ? 'yes' : 'no';
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s", $name);
            return false;
        }
}
