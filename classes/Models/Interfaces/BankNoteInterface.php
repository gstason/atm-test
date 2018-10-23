<?php

namespace Models;

/**
 * Interface BankNoteInterface
 *
 * Интерфейс объявляет методы, которые должны быть обязательно реализованы у сущностей банкнот
 */
interface BankNoteInterface
{
    /**
     * Установка доступности банкноты
     *
     * @param bool $available флаг доступности банкноты
     */
     public function setAvailable(bool $available);
    
    /**
     * Получаем доступность купюры (имитация вывода купюры из оборота или отсутствия в банкомате) 
     *
     * @return bool
     */
    public function isAvailable();
    
    /**
     * Получаем номинал купюры
     *
     * @return int
     */
    public function getValue();
}