#!/bin/bash

logFile="/home/ubuntu/try-n-error/test-command-linux/crontab.log"
logMessage="This is a new log message."

# Add timestamp to the log message
logMessage="$(date "+%Y-%m-%d %H:%M:%S") - $logMessage"

# Write the log message to the file
echo "$logMessage" >> "$logFile"

php /home/ubuntu/try-n-error/test-command-linux/terminate.php
