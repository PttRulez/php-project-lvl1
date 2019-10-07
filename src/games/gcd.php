<?php

namespace Games\Gcd;

use function cli\line;

function run($name)
{
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);

        $a = $number1;
        $b = $number2;
        while ($a != 0 && $b != 0) {
            if ($a > $b) {
                $a = $a % $b;
            } else {
                $b = $b % $a;
            }
        }
        $nod = $a + $b;

        line("Question: %s %s", $number1, $number2);
        $answer = \cli\prompt('Your answer');

        if ($answer == $nod) {
            line("Correct!");
            return true;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $nod);
            line("Let's try again, %s", $name);
            return false;
        }
}
