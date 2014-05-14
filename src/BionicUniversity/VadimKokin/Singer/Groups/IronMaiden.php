<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 1:17 PM
 */
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include "$root/Genres/Metal.php";
include "$root/Abstracts/IGroup.php";
include 'GroupsTrait.php';

class IronMaiden extends Metal implements IGroup
{
    use GroupsTrait;

    /**
     * @return string
     */
    public function SingASong()
    {
        return 'I am a man who walks alone' . PHP_EOL .
        'And when I\'m walking a dark road' . PHP_EOL .
        'At night or strolling through the park ';
    }
}