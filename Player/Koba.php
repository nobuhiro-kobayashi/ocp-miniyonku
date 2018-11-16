<?php

require_once dirname(__FILE__) . '/../Interface/IPlayer.php';

// コバクラス
class Koba implements IPlayer
{
    private $miniyonku;

    public function __construct(IMiniyonku $miniyonku)
    {
        $this->miniyonku = $miniyonku;
    }

    // マシンを走らせる
    public function runRace()
    {
        $this->miniyonku->setOn();
    }
}
