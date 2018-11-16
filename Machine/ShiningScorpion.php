<?php

require_once dirname(__FILE__) . "/../Interface/IMiniyonku.php";

// レイスティンガークラス
class ShiningScorpion implements IMiniyonku
{
    private $chassis;
    private $battery;
    private $gear;
    private $motor;
    private $shaft;
    private $wheel;
    private $tire;
    private $roller;
    private $ready = false;
    private $color = 'blue';

    public function __construct(
        IChassis $chassis,
        IBattery $battery,
        Gear $gear,
        IMotor $motor,
        IShaft $shaft,
        IWheel $wheel,
        ITire $tire,
        IRoller $roller
    )
    {
        $this->chassis = $chassis;
        $this->battery = $battery;
        $this->gear = $gear;
        $this->motor = $motor;
        $this->shaft = $shaft;
        $this->wheel = $wheel;
        $this->tire = $tire;
        $this->roller = $roller;
    }
    // スイッチをONにする
    public function setOn()
    {
        $this->ready = true;
    }
    // スイッチをOFFにする
    public function setOff()
    {
        $this->ready = false;
    }
    // 速度を取得する
    public function getSpeed(): float
    {
        if ($this->battery->isEmpty()) {
            return 0;
        }
        // 速度ちょっと早め
        if ($this->ready) {
            return $this->gear->getRatio() * $this->motor->getRev() * 1.2;
        } else {
            return 0;
        }
    }
}