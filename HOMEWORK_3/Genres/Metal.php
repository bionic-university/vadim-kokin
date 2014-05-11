<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 11:05 AM
 */
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/Abstracts/AbstractGenre.php";

class Metal extends AbstractGenre
{
    /**
     * @var string
     */
    public $GenreInfo = 'Metal is a genre of rock music that developed in the late 1960s and early 1970s.
    More on wiki http://en.wikipedia.org/wiki/Heavy_metal_music';


}