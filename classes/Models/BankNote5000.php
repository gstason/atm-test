<?php

namespace Models;

/**
 * BankNote5000
 *
 * Класс 5000-рублевых банкнот
 */
class BankNote5000 extends BankNoteAbstract
{
    function __construct() {
        $this->value = 5000;
        $this->available = true;
    }
}