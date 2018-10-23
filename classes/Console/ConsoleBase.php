<?php

namespace Console;

use \Console\ConsoleATM;

/**
 * ConsoleBase
 * Базовый класс для работы с консольными скриптами 
 */
class ConsoleBase
{
    /**
     * Метод, реализующий общую логику обработки консольных скриптов
     *
     * @param array $argv массив аргументов, передаваемых скрипту из командной строки
     */
    public function run(array $argv)
    {
        $actions = array('release');

        if (!(isset($argv[1]) && in_array($argv[1], $actions))) {
            die('Недопустимая операция. Возможные команды: '.implode(' | ', $actions));
        } else {
            $action = $argv[1];
        }

        if ($action == 'release' && !empty($argv[2]) && $releaseSum = intval($argv[2])) {
            $consoleATM = new ConsoleATM;
            
            $consoleATM->run($releaseSum);
        } else {
            die('Введена неверная сумма. Пример команды: release 3500');
        }
    }
}