<?php

namespace App;

use SplObserver;
use SplSubject;

class User implements SplObserver
{
    private $name;
    private $notified = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    //encore des erreurs ici meme si les tests sont passés

    public function update(SplSubject $subject)
    {
        $this->notified = true;
    }

    public function isNotified()
    {
        return $this->notified;
    }
}