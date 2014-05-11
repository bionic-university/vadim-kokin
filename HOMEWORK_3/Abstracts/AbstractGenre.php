<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 12:39 PM
 */
include('IGenre.php');


class AbstractGenre implements IGenre
{
    public $GenreInfo;

    /**
     * @return String
     */
    public function getGenreInfo()
    {
        return $this->GenreInfo;
    }

    public function GetGroupGenre()
    {
    }

}