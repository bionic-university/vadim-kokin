<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 4/29/14
 * Time: 11:42 AM
 */

abstract class abstractBuilding {
    /**
     * @var Roof
     */
    protected $roof;
    /**
     * @var Level
     */
    protected $level;

    protected $levelsCount;


    function __construct($levels, $levelsCount, $roof){
        $this->level = $levels;
        $this->levelsCount = $levelsCount;
        $this->roof = $roof;
    }
} 