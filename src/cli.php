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

namespace BrainGames\Cli;

use Functions;
use Games;

use function cli\line;

/**
 * Define template file.
 *
 * @return void
 */
function run()
{
    Functions\sayWelcome();
    $name = Functions\askName();
    Functions\sayHello($name);
}

function runEven()
{
    Functions\sayWelcome();
    line('Answer "yes" if number even otherwise answer "no"');
    $name = Functions\askName();
    Functions\sayHello($name);

    Functions\runGame('even', $name);
}

function runCalc()
{
    Functions\sayWelcome();
    line('What is the result of the expression?');
    $name = Functions\askName();
    Functions\sayHello($name);

    Functions\runGame('calc', $name);
}

function runGcd()
{
    Functions\sayWelcome();
    line('Find the greatest common divisor of given numbers.');
    $name = Functions\askName();
    Functions\sayHello($name);

    Functions\runGame('gcd', $name);
}

function runProgression()
{
    Functions\sayWelcome();
    line('What number is missing in the progression?');
    $name = Functions\askName();
    Functions\sayHello($name);

    Functions\runGame('progression', $name);
}

function runPrime()
{
    Functions\sayWelcome();
    line('Answer "yes" if given number is prime. Otherwise answer "no"');
    $name = Functions\askName();
    Functions\sayHello($name);

    Functions\runGame('prime', $name);
}
