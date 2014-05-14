<?php


class Wall {
    protected $material;
    protected $width;
    protected $height;
    //protected $is_window;




    function __construct($material, $width, $height){
        $this->material = $material;
        $this->width = $width;
        $this->height = $height;
    }

//    /**
//     * @param boolean $is_window
//     */
//    public function setIsWindow($is_window)
//    {
//        $this->is_window = $is_window;
//    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }



} 