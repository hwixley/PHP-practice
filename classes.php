<?php

class Task {

    public $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;

    }
}

$task1 = new Task("Say hello to the world");

echo $task1->description;