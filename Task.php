<?php

class Task
{
    private $title;
    public $isCompleted = false;

    public function __construct(string $title, bool $isCompleted = false)
    {
        $this->title = $title;
        $this->isCompleted = $isCompleted;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function setIsCompleted(bool $isCompleted): void
    {
        $this->isCompleted = $isCompleted;
    }
}

// uzrakstīt Calculator klasi,
// kuru inicializējot padosim 2 ciparus un jāuztaisa funkcijas:
// add()
// subtract()
// multiply()
// divide()
// getResult()
