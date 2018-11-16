<?php

require_once dirname(__FILE__) . '/SpurGear.php';
require_once dirname(__FILE__) . '/CounterGear.php';

class Gear
{
    private $spurGear;
    private $counterGear;

    public function __construct(
        SpurGear $spurGear,
        CounterGear $counterGear
    )
    {
        $this->spurGear = $spurGear;
        $this->counterGear = $counterGear;
    }
    public function getRatio(): float
    {
        return $this->counterGear->getSize() / $this->spurGear->getSize();
    }
}
