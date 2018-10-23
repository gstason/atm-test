<?php

namespace Models;

/**
 * BankNote1000
 *
 * Класс 1000-рублевых банкнот
 */
class BankNote1000 extends BankNoteAbstract
{
    function __construct() {
        $this->value = 1000;
        $this->available = true;
    }
}