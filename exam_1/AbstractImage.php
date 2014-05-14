<?php

/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/14/14
 * Time: 8:44 PM
 */
include_once('ImageInterface.php');

abstract class  AbstractImage implements ImageInterface
{
    public abstract  function getHeight();

    public abstract  function getWidth();

}