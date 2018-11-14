<?php

// ミニ四駆プレイヤー
interface Player
{
    // マシンを組み立てる
    public function setUpMiniyonku();
    // スイッチをONにする
    public function setOn();
    // スイッチをOFFにする
    public function setOff();
    // マシンを走らせる
    public function runMiniyonku(Miniyonku $miniyonku);
}


// ミニ四駆クラス
interface Miniyonku
{

}
// シャーシ
interface Chassis
{
    // モーター + ギアの組み合わせパーツをセットする
    // スパーギアをセットする
    // 前方シャフトをセットする
    // 後方シャフトをセットする
    // バッテリーをセットできる
    // フロントローラーをセットする
}
// バッテリー
interface Battery
{
    // 電流を流す
    public function flowCurrent();
}
// スパーギア
interface SpurGear
{
    // 回る
    public function rolling();
}
// カウンターギア
interface CounterGear
{
    // 回る
    public function rolling();

}
// ピニオンギア
interface PinionGear
{
    // 回る
    public function rolling();
}
// モーター
interface Motor
{
    // 動く
    public function move();
    // ピニオンギアをセットする
    public function setPinionGear(PinionGear $pinionGear);
}
// モーター + カウンターギア + ピニオンギアのセット
interface MotorSet
{
    // カウンターギアをセットする
    public function setCounterGear(CounterGear $counterGear);
    // モーターをセットする
    public function setMotor(Motor $motor);
}
// シャフト
interface Shaft
{
    // ホイールと結合する
    public function combineWheel(Wheel $wheel);
}
// ホイール
interface Wheel
{
    // タイヤと結合する
    public function combineTire(Tire $tire);
}

// タイヤ
interface Tire
{
    // ホイールと結合する
    public function combineWheel(Wheel $wheel);
}

// ボディ
interface Body
{
    // シャーシに乗せる
    public function setOnChassis();
}

// ローラー
interface Roller
{
    // 回る
    public function rolling();
}