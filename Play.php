<?php

require_once dirname(__FILE__) . '/Machine/RayStinger.php';
require_once dirname(__FILE__) . '/Machine/ShiningScorpion.php';

require_once dirname(__FILE__) . '/Part/SuperOneChassis.php';
require_once dirname(__FILE__) . '/Part/AlkalineBattery.php';
require_once dirname(__FILE__) . '/Part/Gear.php';
require_once dirname(__FILE__) . '/Part/RevTunedMotor.php';
require_once dirname(__FILE__) . '/Part/NormalShaft.php';
require_once dirname(__FILE__) . '/Part/NormalWheel.php';
require_once dirname(__FILE__) . '/Part/SpongeTire.php';
require_once dirname(__FILE__) . '/Part/NormalRoller.php';
require_once dirname(__FILE__) . '/Player/Koba.php';


// ミニ四駆を作る
$rayStinger = new RayStinger(
    new SuperOneChassis(),
    new AlkalineBattery(),
    new Gear(
        new SpurGear(4, 'brown', 'plastic'),
        new CounterGear(4, 'black', 'plastic')
    ),
    new RevTunedMotor(),
    new NormalShaft(),
    new NormalWheel(),
    new SpongeTire(),
    new NormalRoller()
);
$shiningScorpion = new ShiningScorpion(
    new SuperOneChassis(),
    new AlkalineBattery(),
    new Gear(
        new SpurGear(4, 'brown', 'plastic'),
        new CounterGear(4, 'black', 'plastic')
    ),
    new RevTunedMotor(),
    new NormalShaft(),
    new NormalWheel(),
    new SpongeTire(),
    new NormalRoller()
);

// レースする
$player1 = new Koba($rayStinger);
$player1->runRace();
echo "レイスティンガー<br>";
echo $rayStinger->getSpeed() . '<br>';

$player2 = new Koba($shiningScorpion);
$player2->runRace();
echo "シャイニングスコーピオン<br>";
echo $shiningScorpion->getSpeed() . '<br>';

echo "レイスティンガーの攻撃<br>";
$rayStinger->killMachine($shiningScorpion);

echo "レイスティンガー<br>";
echo $rayStinger->getSpeed() . '<br>';

echo "シャイニングスコーピオン<br>";
echo $shiningScorpion->getSpeed() . '<br>';
