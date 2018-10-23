<?php

namespace Models;

/**
 * BankNoteAbstract
 *
 * Абстрактный класс для банкнот
 */
class BankNoteAbstract implements BankNoteInterface
{
    /**
     * @var int $value номинал банкноты
     */
    protected $value;
    /**
     * @var bool $available доступность банкноты
     */
    protected $available;
    
    /**
     * Установка доступности банкноты
     *
     * @param bool $available флаг доступности банкноты
     */
    public function setAvailable(bool $available)
    {
        $this->available = $available;
    }
    
    /**
     * Получаем доступность купюры (имитация вывода купюры из оборота или отсутствия в банкомате) 
     *
     * @return bool
     */
    public function isAvailable()
    {
        return $this->available;
    }
    
    /**
     * Получаем номинал купюры
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }
}