<?php

$raw = file_get_contents('php://input');
$receive = json_decode($raw, true);
Log::info($receive);
//error_log(print_r($receive,true),"3","/var/log/php.log");

?>

hello