<?php

$port = 3388; // change to the port you want to check

// execute lsof command to check for port
exec("lsof -i :$port", $output, $return_value);

if ($return_value === 0) {
    // port is in use
    echo "Port $port is in use.";
    // output the result of the command
    echo implode("\n", $output);
  } else {
    // port is not in use
    echo "Port $port is not in use.";
  }
