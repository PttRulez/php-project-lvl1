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
    for ($i=0; $i < 3; $i++) {
        $number = rand();
        line("Question: %s", $number);
        $answer = \cli\prompt('Your answer');
        $odd =  ($number % 2 == 0) ? true : false;

        if(($answer == "yes" && $odd == true) || ($answer == "no" && $odd == false)) {
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