<?php

require_once __DIR__ . '/vendor/autoload.php';

$port = 3387; // change to the port you want to check

// execute lsof command to check for port
exec("lsof -i :$port", $output, $return_value);

if ($return_value === 0) {
    // port is in use
    echo "Port $port is in use." . PHP_EOL;
    // output the result of the command
    dump($port);
  } else {
    // port is not in use
    echo "Port $port is not in use." . PHP_EOL;
  }
