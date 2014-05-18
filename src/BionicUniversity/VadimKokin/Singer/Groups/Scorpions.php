<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 1:28 PM
 */

include __DIR__."//../Genres/Rock.php";
include __DIR__."//../Abstracts/IGroup.php";


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