<?php

namespace Games\Even;

use function cli\line;

function run($name)
{
        $number = rand(1, 100);
        line("Question: %s", $number);
        $answer = \cli\prompt('Your answer');
        $odd =  ($number % 2 == 0) ? true : false;

        if (($answer == "yes" && $odd == true) || ($answer == "no" && $odd == false)) {
            line("Correct!");
            return true;
        } else {
            $correctAnswer = ($odd == true) ? 'yes' : 'no';
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s", $name);
            return false;
        }
}