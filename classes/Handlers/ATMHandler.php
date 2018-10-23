<?php

namespace Handlers;

/**
 * ATMHandler
 * Класс, реализующий логику работы банкомата 
 */
class ATMHandler
{   
    /**
     * @var BankNote[] доступные в банкомате купюры
     */
    protected $bankNotes;
    
    public function __construct()
    {
        $this->bankNotes = array();
    }
    
    /**
     * Добавление доступной банкноты
     *
     * @param \Models\BankNoteInterface $bankNote банкнота
     */
    public function loadBankNote(\Models\BankNoteInterface $bankNote)
    {
        $this->bankNotes[] = $bankNote;
    }
    
    /**
     * Алгоритм выдачи наличных
     *
     * @param int $releaseSum запрашиваемая сумма
     */
    public function release($releaseSum)
    {
        $this->sortBankNotes();
        
        $result = array();
        
        foreach ($this->bankNotes as $bankNote) {
            if ($bankNote->isAvailable() && $count = intdiv($releaseSum, $bankNote->getValue())) {
                $result[] = array(
                    "bankNoteValue" => $bankNote->getValue(),
                    "count" => $count,
                );
                
                $releaseSum -= $bankNote->getValue() * $count;
            }
        }
        
        if ($releaseSum > 0) {
            return false;
        }
        
        return $result;
    }
    
    /**
     * Вызов кастомной сортировки банкнот
     */
    protected function sortBankNotes()
    {
        usort($this->bankNotes, array($this, "bankNotesCustomSort"));
    }
    
    /**
     * Метод кастомной сортировки банкнот.
     * Банкноты сортируются по убыванию номинала.
     *
     * @param \Models\BankNoteInterface $a банкнота
     * @param \Models\BankNoteInterface $b банкнота
     *
     * @return int
     */
    private function bankNotesCustomSort(\Models\BankNoteInterface $a, \Models\BankNoteInterface $b)
    {
        if ($a->getValue() == $b->getValue()) {
            return 0;
        }
        
        return ($a->getValue() < $b->getValue()) ? 1 : -1;
    }
}