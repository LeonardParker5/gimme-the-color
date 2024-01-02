#!/bin/bash

start_time=$(date +%s)

php run_test.php

end_time=$(date +%s)
runtime=$((end_time - start_time))

echo "Runtime: $runtime seconds"