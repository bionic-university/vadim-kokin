<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 1:34 PM
 */
include __DIR__."//../Genres/Metal.php";
include __DIR__."//../Abstracts/IGroup.php";
include 'GroupsTrait.php';

class Helloween extends Metal implements IGroup
{

    use GroupsTrait;

    /**
     * @return string
     */
    public function SingASong()
    {
        return 'We\'ve got the power' . PHP_EOL .
        'We are divine' . PHP_EOL .
        'we have the guts to follow the sign' . PHP_EOL .
        'extracting tensions from sources unknown' . PHP_EOL .
        'We are the ones to cover the throne';
    }
}