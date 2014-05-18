<?php

$data = $argv[1];
echo 'Data input: '.$argv[1].PHP_EOL;
//$data = 'This is a very long text';

if(empty($data)){
    echo 'Wrong input data. Script run command is: php index.php \'Your data is here\'';
    exit;
}

$array = str_split($data);
print_r(array_count_values($array));
