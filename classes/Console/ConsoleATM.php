<?php

namespace Console;

use \Handlers\ATMHandler;
use \Models\BankNote50;
use \Models\BankNote100;
use \Models\BankNote500;
use \Models\BankNote1000;
use \Models\BankNote5000;

/**
 * ConsoleATM
 * Класс работы с банкоматом через командную строку 
 */
class ConsoleATM
{    
    /**
     * Имитация работы банкомата: загрузка доступных купюр, обработка запрошенной суммы, вывод ответа в консоль
     *
     * @param int $releaseSum запрошенная сумма
     */
    public function run(int $releaseSum) 
    {
        $atm = new ATMHandler;

        $bankNote50 = new BankNote50;
        $bankNote100 = new BankNote100;
        $bankNote500 = new BankNote500;
        $bankNote1000 = new BankNote1000;
        $bankNote5000 = new BankNote5000;

        $atm->loadBankNote($bankNote50);
        $atm->loadBankNote($bankNote100);
        $atm->loadBankNote($bankNote500);
        $atm->loadBankNote($bankNote1000);
        $atm->loadBankNote($bankNote5000);

        $result = $atm->release($releaseSum);

        if ($result === false) {
            echo 'Введена неверная сумма';
        } else {
            print_r($result);
        }
    }
}