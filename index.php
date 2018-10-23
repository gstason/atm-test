<?php

/**
 * Консольный скрипт, имитирующий выдачу наличных банкоматом.
 * Пример запуска: php index.php release 3500
 */

require_once 'PseudoAutoLoader.php';

use \Console\ConsoleBase;

$console = new ConsoleBase;

$console->run($argv);