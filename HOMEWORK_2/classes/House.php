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

        var_dump($wall);



    }

    public function calcTotalHeight(){
        return $this->roof->getMaxHeight() + $this->levelsCount;
    }


}