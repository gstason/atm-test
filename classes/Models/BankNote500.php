<?php

namespace Models;

/**
 * BankNote500
 *
 * Класс 500-рублевых банкнот
 */
class BankNote500 extends BankNoteAbstract
{
    function __construct() {
        $this->value = 500;
        $this->available = true;
    }
}