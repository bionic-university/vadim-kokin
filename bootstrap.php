<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/19/14
 * Time: 4:36 PM
 */

require_once 'vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$classLoader = new UniversalClassLoader();
$classLoader ->registerNamespaces(array(
    'BionicUniversity' => __DIR__ . '/src',
));
$classLoader->register();

error_reporting(E_ALL);
ini_set('display_errors', 'On');