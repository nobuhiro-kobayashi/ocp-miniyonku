<?php
require_once 'Interfaces.php';

// コバクラス
class Koba implements Player
{
    public function __construct(
        Chassis $charsis,
        Battery $battery,
        SpurGear $spurGear,
        MotorSet $motorSet,
        Shaft $shaft,
        Wheel $wheel,
        Tire $tire
    )
    {

    }
}

// レイスティンガークラス
class RayStinger implements Miniyonku
{
    // シャーシとボディをボディキャッチ止める
    public function combineChassisIntoBody(Chassis $chassis, Body $body)
    {

    }
    // スイッチをONにする
    public function setOn()
    {

    }
    // スイッチをOFFにする
    public function setOff()
    {

    }
}


// 必要なパーツ

// スーパー1シャーシ
class SuperOneChassis implements Chassis
{
    // モーター + ギアの組み合わせパーツをセットする
    // スパーギアをセットする
    // 前方シャフトをセットする
    // 後方シャフトをセットする
    // バッテリーをセットできる
    // フロントローラーをセットする
}


// アルカリバッテリー
class AlkalineBattery implements Battery
{
    // 電流を流す
    public function flowCurrent()
    {

    }
}

// ウルトラギア(スパーギア)
class UltraSpurGear implements SpurGear
{
    // 回る
    public function rolling()
    {

    }
}

// スパーギア(カウンターギア)
class UltraCounterGear implements CounterGear
{
    // 回る
    public function rolling()
    {

    }
}


// ピニオンギア
class NormalPinionGear implements PinionGear
{
    // 回る
    public function rolling()
    {

    }
}

// レブチューンモーター
class RevTunedMotor implements Motor
{
    // 動く
    public function move()
    {

    }
    // ピニオンギアをセットする
    public function setPinionGear(PinionGear $pinionGear)
    {

    }
}


// モーター + カウンターギア + ピニオンギアのセット
class NormalMotorSet implements MotorSet
{
    // カウンターギアをセットする
    public function setCounterGear(CounterGear $counterGear)
    {

    }
    // モーターをセットする
    public function setMotor(Motor $motor)
    {

    }
}

// ノーマルシャフト
class NormalShaft implements Shaft
{
    // ホイールと結合する
    public function combineWheel(Wheel $wheel)
    {

    }
}

// ノーマルホイール
class NormalWheel implements Wheel
{
    // タイヤと結合する
    public function combineTire(Tire $tire)
    {

    }
}

// スポンジタイヤ
class SpongeTire implements Tire
{
    // ホイールと結合する
    public function combineWheel(Wheel $wheel)
    {

    }
}

// ボディ
class Body
{
    // シャーシに乗せる
}

// ローラー
class Roller
{
    // 回る
    public function rolling()
    {

    }
}


$rayStinger = new RayStinger();
$rayStinger->combineChassisIntoBody();