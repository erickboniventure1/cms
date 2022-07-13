<?php
require  __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Configuration;
use Kreait\Firebase\Firebase;

$config = new Configuration();
$config ->setAuthConfigFile(__DIR__.'/google-services.json');

$firebase = new Firebase('https://frame-51cfc-default-rtdb.firebaseio.com');

//$firebase->set(['key' => 'value'], 'frame/data');
//$firebase->set('new value','frame/data/key');
//
//$firebase->delete('supplier');
