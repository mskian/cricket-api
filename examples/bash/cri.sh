#!/usr/bin/env bash

# cURL Request
curl -s --request GET \
    --url "http://localhost:6001/live.php" \ | jq '.livescore.title, .livescore.current'

exit 0
