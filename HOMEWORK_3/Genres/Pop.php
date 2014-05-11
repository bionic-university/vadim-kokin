<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 11:04 AM
 */
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/Abstracts/AbstractGenre.php";

class Pop extends AbstractGenre
{
    /**
     * @var string
     */
    public $GenreInfo = 'Pop music (a term that originally derives from an abbreviation of "popular")
    is a genre of popular music which originated in its modern form in the 1950s, deriving from rock and roll.
    More on wiki http://en.wikipedia.org/wiki/Pop_music';

}