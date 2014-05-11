<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 1:41 PM
 */
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include "$root/Genres/Rock.php";
include "$root/Abstracts/IGroup.php";

class LedZeppelin extends Rock implements IGroup
{
    use GroupsTrait;

    /**
     * @return string
     */
    public function SingASong()
    {
        return 'Ooh, ooh,' . PHP_EOL .
        'and she\'s buying a stairway to heaven . ';
    }
}