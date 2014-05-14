<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 11:03 AM
 */

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
echo $root;
include "$root/Abstracts/AbstractGenre.php";

class Rock extends AbstractGenre
{
    /**
     * @var string
     */
    public $GenreInfo = 'Rock music is a genre of popular music that originated as "rock and roll" in the United States
     in the 1950s. More on wiki: http://en.wikipedia.org/wiki/Rock_music';

} 