<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/14/14
 * Time: 8:46 PM
 */
include_once('AbstractImage.php');
include_once('Point.php');
class Image extends AbstractImage
{

    private $Height;
    private $Width;

    public function __construct($height, $width) //TODO ($LeftHConer, $LeftDConer, $RigthHConer, $RigthDConer)
    {
        $this->Height = $height;
        $this->Width = $width;
    }


    public function getHeight() //TODO get from coordinats
    {
        return $this->Height;
    }

    public function getWidth()  //TODO get from coordinats
    {
        return $this->Width;
    }

    public function getCenter()
    {
        $HeightCenter = $this->Height / 2;
        $WidthCenter = $this->Width / 2;

        $CenterPoint = new Point();
        $CenterPoint->setXCoordinate($WidthCenter);
        $CenterPoint->setYCoordinate($HeightCenter);

        return $CenterPoint;
    }


} 