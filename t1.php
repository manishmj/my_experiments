<?php
$url='https://oscarliang.com';
// using file() function to get content
$lines_array=file($url);
// turn array into one variable
$lines_string=implode('',$lines_array);
//output, you can also save it locally on the server
echo $lines_string;
?>