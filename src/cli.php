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

use function cli\line;
use Functions;

/**
 * Define template file.
 *
 * @return void
 */
function run()
{
    line('Welcome to the Brain Game!');
    $name = Functions\askName();
    Functions\sayHello($name);
}

function runEven()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no"');
    $name = Functions\askName();
    Functions\sayHello($name);

    Functions\runEvenGame($name);
}
