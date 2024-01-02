#!/bin/bash

input_file="colors.txt"

temp_file=$(mktemp)

# Convert hex values to decimal and append to temporary file
awk '{ printf "%d %s\n", "0x" $1, $0 }' "$input_file" > "$temp_file"

# Sort the temporary file based on the first column (decimal values)
sort -n -k1 -o "$temp_file" "$temp_file"

# Print the sorted results with original hex values and color names
cat "$temp_file" | cut -d' ' -f2-

rm "$temp_file"