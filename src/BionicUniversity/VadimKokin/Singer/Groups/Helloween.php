<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 1:34 PM
 */
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include "$root/Genres/Metal.php";
include "$root/Abstracts/IGroup.php";
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