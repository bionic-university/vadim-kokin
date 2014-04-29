<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 4/29/14
 * Time: 11:53 AM
 */



class Level {
    private $flats;
    protected $walls;
    protected $windows;

    function __construct($flats, $walls, $windows){
        $this->flats = $flats;
        $this->walls = $walls;
        $this->windows = $windows;
    }

    /**
     * @return mixed
     */
    public function getFlats()
    {
        return $this->flats;
    }

    /**
     * @return mixed
     */
    public function getWalls()
    {
        return $this->walls;
    }

    /**
     * @return mixed
     */
    public function getWindows()
    {
        return $this->windows;
    }



} 