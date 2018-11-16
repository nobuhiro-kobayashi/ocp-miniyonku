<?php

require_once dirname(__FILE__) . '/../Interface/IMotor.php';

// レブチューンモーター
class RevTunedMotor implements IMotor
{
    public function getRev(): int
    {
        return 100;
    }
}
