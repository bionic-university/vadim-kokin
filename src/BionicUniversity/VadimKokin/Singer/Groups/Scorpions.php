<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 1:28 PM
 */
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include "$root/Genres/Rock.php";
include "$root/Abstracts/IGroup.php";


class Scorpions extends Rock implements IGroup
{
    /**
     * @return string
     */
    public function SingASong()
    {
        return 'Her I am, rock you like a hurricane' . PHP_EOL .
        'Her I am, rock you like a hurricane';
    }
}