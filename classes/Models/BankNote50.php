<?php

namespace Models;

/**
 * BankNote50
 *
 * Класс 50-рублевых банкнот
 */
class BankNote50 extends BankNoteAbstract
{
    function __construct() {
        $this->value = 50;
        $this->available = true;
    }
}