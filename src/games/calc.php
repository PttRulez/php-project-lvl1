<?php

namespace Games\Calc;

use function cli\line;

function run($name)
{
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operand = rand(1, 3);
        $string = "";
        $correctAnswer = 0;

        switch ($operand) {
            case 1:
                $string = $number1 . ' + ' . $number2;
                $correctAnswer = $number1 + $number2;
                break;
            case 2:
                $string = $number1 . ' - ' . $number2;
                $correctAnswer = $number1 - $number2;
                break;
            case 3:
                $string = $number1 . ' * ' . $number2;
                $correctAnswer = $number1 * $number2;
                break;
        }

        line("Question: %s", $string);
        $answer = \cli\prompt('Your answer');

        if ($answer == $correctAnswer) {
            line("Correct!");
            return true;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s", $name);
            return false;
        }
}
