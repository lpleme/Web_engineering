<?php
$file = './public_html/week13/data';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current = $first_name+ $first_name_2+ $last_name+ $last_name_2+ $performance+ $location+ $room+ $time_slot+ $student_id+ $student_id_2+ $skill+ $instrument;
// Write the contents back to the file
file_put_contents($file, $current);



$file = file_get_contents('./public_html/week13/data', FILE_USE_INCLUDE_PATH);
?>