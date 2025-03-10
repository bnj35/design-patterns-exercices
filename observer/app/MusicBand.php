<?php

namespace App;

use SplSubject;
use SplObserver;

class MusicBand implements SplSubject
{
    private $name;
    private $observers = [];
    private $concertDate;

    public function __construct($name)
    {
        $this->name = $name;
    }

    //encore des erreurs ici meme si les tests sont passés

    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addNewConcertDate($date, $location)
    {
        $this->concertDate = "$date at $location";
        $this->notify();
    }
}