<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 4/28/14
 * Time: 6:35 PM
 */

class Circle {
    /**
     * @var string
     */
    public $material;
    /**
     * @var string
     */
    public $color;
    /** @var  float */
    private  $radius;

    public function __construct($color, $material, $radius){
        $this->color = $color;
        $this->material = $material;
        $this->radius = $radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }





} 