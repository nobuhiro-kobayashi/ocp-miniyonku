<?php

require_once dirname(__FILE__) . "/../Interface/IMiniyonku.php";

// レイスティンガークラス
class RayStinger implements IMiniyonku
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

    public function __construct(
        SuperOneChassis $chassis,
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
        if ($this->ready) {
            return $this->gear->getRatio() * $this->motor->getRev();
        } else {
            return 0;
        }
    }
    // 相手のマシンの動きを止める
    public function killMachine(IMiniyonku $otherMachine)
    {
        $otherMachine->setOff();
    }
}