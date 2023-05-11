#!/bin/bash

apiUrl="https://catfact.ninja/fact"

# Make the API request and store the response in a variable
response=$(curl -s "$apiUrl")

# Parse the JSON response to extract the desired data
fact=$(echo "$response" | jq -r '.fact')

# Output the information
echo "face : $fact:"
