<?php

require_once __DIR__ . '/vendor/autoload.php';

$port = 3387;
exec("lsof -i :$port -t", $output, $returnValue);
if ($returnValue === 0) {
    if (is_array($output)) {
        if (count($output) > 0) {
            $pid = $output[0];
            exec("kill -9 $pid", $result, $status);
            // Check if the command was executed successfully.
            if ($status === 0) {
                echo "Process terminated successfully.";
            } else {
                echo "Failed to terminate the process.";
            }
        }
    }
} else {
    echo "Port $port is not in use." . PHP_EOL;
}
