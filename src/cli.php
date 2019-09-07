<?php

/**
 * PHP version 7
 * @category Hexlet_Lesson
 * @package  Braingames
 * @author   Aleksandr Petrov <sashafem@mail.ru>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://yoursite.com
 */

namespace BrainGames\Cli;

use function cli\line;

/**
 * Define template file.
 *
 * @return void
 */

function run()
{
    line('Welcome to the Brain Game!');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}
