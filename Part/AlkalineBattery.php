<?php

require_once dirname(__FILE__) . '/../Interface/IBattery.php';

// アルカリバッテリー
class AlkalineBattery implements IBattery
{
    // 電池残量
    private static $charge = 2;

    // 電流を流す
    public function flowCurrent()
    {
        if (!$this->isEmpty()) {
            self::$charge--;
        }
    }

    public function isEmpty(): bool
    {
        return self::$charge < 0;
    }

    // アンペアとかで戻り値を縛りたい
    public function getCharge(): int
    {
        return self::$charge;
    }
}