<?php

/**
 * PHP version 7
 *
 * @category Hexlet_Lesson
 * @package  Braingames
 * @author   Aleksandr Petrov <sashafem@mail.ru>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://yoursite.com
 */

namespace Functions;

use function cli\line;
use function cli\prompt;

function sayWelcome()
{
    line('Welcome to the Brain Games!');
}
function askName()
{
    return prompt('May I have your name?');
}

function sayHello($name)
{
    line("Hello, %s!", $name);
}

function runEvenGame($name)
{
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        line("Question: %s", $number);
        $answer = \cli\prompt('Your answer');
        $odd =  ($number % 2 == 0) ? true : false;

        if (($answer == "yes" && $odd == true) || ($answer == "no" && $odd == false)) {
            line("Correct!");
        } else {
            $correctAnswer = ($odd == true) ? 'yes' : 'no';
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

function runCalcGame($name)
{
    for ($i = 0; $i < 3; $i++) {
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
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

function runGcdGame($name)
{
    for ($i = 0; $i < 3; $i++) {
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
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $nod);
            line("Let's try again, %s", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
