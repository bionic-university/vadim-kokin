<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 4/29/14
 * Time: 12:41 PM
 */

class Roof {
    /**
     * @var string
     */
    protected $material;
    /**
     * @var float
     */
    protected $maxHeight;

    function __construct($material, $maxHeight){
        $this->material = $material;
        $this->maxHeight = $maxHeight;
    }

    /**
     * @return float
     */
    public function getMaxHeight()
    {
        return $this->maxHeight;
    }

    /**
     * @param string $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }


} 