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

use Games;
use function cli\line;
use function cli\prompt;

function sayWelcome()
{
    line('Welcome to the Brain games!');
}
function askName()
{
    return prompt('May I have your name?');
}

function sayHello($name)
{
    line("Hello, %s!", $name);
}

function runGame($gameName, $name)
{
    $gameName = ucfirst($gameName);
    $functionName = "Games\\" . $gameName . "\\run";
    for ($i = 0; $i < 3; $i++) {
        $result = $functionName($name);
        if (!$result) {
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
