<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/14/14
 * Time: 8:41 PM
 */

include_once('AbstractResizer.php');
include_once('Image.php');

class Resizer extends AbstractResizer
{

    private $NewPictSize = 10;

    public function __construct()
    {

        $this->thumbnail();
    }

    public function thumbnail()
    {
        $oldImage = new Image(15, 26);

        $oldImageLeftHConer = new Point();
        $oldImageLeftHConer->setXCoordinate(0);
        $oldImageLeftHConer->setYCoordinate(0);


        $oldImageRightHConer = new Point();
        $oldImageRightHConer->setXCoordinate($oldImage->getWidth());
        $oldImageRightHConer->setYCoordinate(0);

        $oldImageLeftDConer = new Point();
        $oldImageLeftDConer->setXCoordinate(0);
        $oldImageLeftDConer->setYCoordinate($oldImage->getHeight());

        $oldImageLeftConer = new Point();
        $oldImageLeftConer->setXCoordinate($oldImage->getWidth());
        $oldImageLeftConer->setYCoordinate($oldImage->getHeight());

        $center = $oldImage->getCenter();
        if ($oldImage->getHeight() >= $this->NewPictSize && $oldImage->getWidth() >= $this->NewPictSize) {

            $LeftHConer = new Point();
            $LeftHConer->setXCoordinate($center->getXCoordinate() - $this->NewPictSize / 2);
            $LeftHConer->setYCoordinate($center->getYCoordinate() + $this->NewPictSize / 2);

            $LeftDConer = new Point();
            $LeftDConer->setXCoordinate($center->getXCoordinate() - $this->NewPictSize / 2);
            $LeftDConer->setYCoordinate($center->getYCoordinate() - $this->NewPictSize / 2);

            $RigthHConer = new Point();
            $RigthHConer->setXCoordinate($center->getXCoordinate() + $this->NewPictSize / 2);
            $RigthHConer->setYCoordinate($center->getYCoordinate() + $this->NewPictSize / 2);

            $RigthDConer = new Point();
            $RigthDConer->setXCoordinate($center->getXCoordinate() + $this->NewPictSize / 2);
            $RigthHConer->setYCoordinate($center->getYCoordinate() - $this->NewPictSize / 2);

            $newImage = new Image($LeftHConer, $LeftDConer, $RigthHConer, $RigthDConer);


        } else {

            echo 'Your pick is too small';
        }
    }

}


}


new Resizer();