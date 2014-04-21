<?php

class CharCounter{
    public function __construct($data){
        //$data = getParams(func_get_args());
        echo 'Data input: '.$data.PHP_EOL;
        $array = str_split($data);
        print_r(array_count_values($array));
    }
}

function getParams()
{
	$usage_str = "\r\n".'usage: php index.php \'Your data\''.PHP_EOL;
    if ($_SERVER['argc'] != 2)
		throw new Exception($usage_str);
    $data = trim($_SERVER['argv'][1]);
	return $data;
}


try {
    $data = getParams();

    $robot = new CharCounter($data);


} catch (Exception $ex) {

    echo "\r\n".'ERROR: '.$ex->getMessage()."\r\n";
}

