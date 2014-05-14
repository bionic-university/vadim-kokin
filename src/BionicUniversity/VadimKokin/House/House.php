<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 4/29/14
 * Time: 11:56 AM
 */
include 'abstractBuilding.php';


class House extends abstractBuilding {

    public function calcRoofConner()
    {
        $h = $this->roof->getMaxHeight();

        $wall = $this->level->getWalls();

        $w = $wall->getWidth();
        return round(atan($h/$w)*180/3.14, 2);



    }

    public function calcTotalHeight(){
        return $this->roof->getMaxHeight() + $this->levelsCount*$this->level->getWalls()->getHeight();
    }

    public function selectMaterial(){
        if($this->roof->getMaterial() == $this->level->getWalls()->getMaterial()){
            $result = $this->roof->getMaterial();
        } else {
            $result = $this->roof->getMaterial() . '&' . $this->level->getWalls()->getMaterial();
        }
        return $result;
    }

}