<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 2:01 PM
 */
include_once('Singer.php');

/**
 * Class CallSinger
 */
class CallSinger
{
    public function __construct($group)
    {
        $singer = new Singer('Ivan', 'Pop');
        echo $singer->Sing($group);
    }
}

/**
 * @return string
 * @throws Exception
 */
function getParams()
{
    $usage_str = "\r\n" . 'usage: php index.php \'Group Name\'' . PHP_EOL;
    if ($_SERVER['argc'] != 2)
        throw new Exception($usage_str);
    $data = trim($_SERVER['argv'][1]);
    return $data;
}


try {
    $data = getParams();

    $robot = new CallSinger($data);


} catch (Exception $ex) {

    echo "\r\n" . 'ERROR: ' . $ex->getMessage() . "\r\n";
}