<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/14/14
 * Time: 8:51 PM
 */

class Point {

    private $x_coordinate;
    private $y_coordinate;

    /**
     * @return mixed
     */
    public function getXCoordinate()
    {
        return $this->x_coordinate;
    }

    public function setXCoordinate($x_coordinate)
    {
        $this->x_coordinate = $x_coordinate;
    }

    public function getYCoordinate()
    {
        return $this->y_coordinate;
    }

    public function setYCoordinate($y_coordinate)
    {
        $this->y_coordinate = $y_coordinate;
    }



} 