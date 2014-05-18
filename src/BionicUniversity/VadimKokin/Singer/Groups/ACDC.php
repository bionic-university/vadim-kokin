<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 1:04 PM
 */

//$root = realpath($_SERVER["DOCUMENT_ROOT"]);
//echo $root;
include __DIR__."//../Genres/Rock.php";
include __DIR__."//../Abstracts/IGroup.php";
include 'GroupsTrait.php';

class ACDC extends Rock implements IGroup
{

    use GroupsTrait;

    /**
     * @return string
     */
    public function SingASong()
    {
        return 'I\'m on the highway to hell
                I\'m on the highway to hell
                Highway to hell
                I\'m on the highway to hell';
    }
}