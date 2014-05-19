<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/19/14
 * Time: 4:27 PM
 */

require_once __DIR__ . '/../vendor/phpunit/phpunit/src/Framework/TestCase.php';
require_once __DIR__ . '/../src/BionicUniversity/VadimKokin/Singer/Singer.php';

class SingerTest extends PHPUnit_Framework_TestCase
{

    public function groupProvider(){
        return array(
            array(array('ACDC')),
            array(array('Metalica')),
            array(array('Kirkorov')),
        );
    }


    public function testFavoritGenre()
    {
        $singer = new Singer('Ivan', 'Rock');
        $this->assertEquals('Rock', $singer->getFavoritGenre());
    }

    public function testDirList(){
        $singer = new Singer('Tolya', 'Pop');
        $method = new ReflectionMethod($singer, 'GetDirList');
        $method->setAccessible(true);
        $this->assertNotNull($method->invoke($singer));
    }
    /**
     * @dataProvider groupProvider
     */
    public function testCheckGroup($groups){
        $singer = new Singer('Tolya', 'Pop');
        $method = new ReflectionMethod($singer, 'CheckGroup');
        $method->setAccessible(true);
        $args = ['ACDC'];
        $this->assertTrue($method->invokeArgs($singer, $groups));
    }


} 