<?php

// バッテリー
interface IBattery
{
    // 電流を流す
    public function flowCurrent();
    // 電池残量を取得する
    public function getCharge(): int;
}
