<?php

namespace Models;

class BankNote100 extends BankNoteAbstract
{
    /**
     * BankNote100
     *
     * Класс 100-рублевых банкнот
     */
    function __construct() {
        $this->value = 100;
        $this->available = true;
    }
}