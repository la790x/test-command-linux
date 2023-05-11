<?php

require_once __DIR__ . '/vendor/autoload.php';

$logMessage = "This is a log message from php file";
$logFile = "/home/ubuntu/try-n-error/test-command-linux/crontab.log";
$logMessage = date("Y-m-d H:i:s") . " - " . $logMessage . PHP_EOL;
file_put_contents($logFile, $logMessage, FILE_APPEND);
