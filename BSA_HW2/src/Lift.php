<?php
namespace Iaroslavus;
class Lift
{
    public $currentFloor = 1;
    public $peopleinlift = 0;
    private $maxPeopleInLift = NULL;
    private $maxFloor = NULL;

    public function construct($maxload, $maxfloor)
    {
        if ((!is_int($maxload) or $maxload < 1) or
            (!is_int($maxfloor) or $maxfloor < 1))
        {
            throw new MyException('It must be more than 1 lift in a building');
        }
        $this->maxPeopleInLift = $maxload;
        $this->maxFloor = $maxfloor;
    }

    public function getCurrentFloor()
    {
        return $this->currentFloor;
    }

    public function getPeopleLoaded()
    {
        return $this->peopleinlift;
    }

    public function moveToFloor($floor)
    {
        if ($floor > $this->maxFloor)
        {
            throw new MyException('Such floor doesn`t exist ');
        }
      
        if ($this->peopleinlift > $this->maxPeopleInLift)
        {
            throw new MyException('Lift is overloaded');
        }
        $this->currentFloor = $floor;
        return true;
    }

    public function loadPeople($people = 1)
    {
        if ($people < 1 or ($this->peopleinlift + $people) > $this->maxPeopleInLift * 2)
        {
            throw new MyException('Lift is overloaded');
        }
        $this->peopleinlift += $people;
        return true;
    }

    public function unloadPeople($people = 1)
    {
        if ($people < 1 or ($this->peopleinlift - $people) < 0)
        {
            throw new MyException('Invalid number of people to unload');
        }
        $this->peopleinlift -= $people;
        return true;
    }
}