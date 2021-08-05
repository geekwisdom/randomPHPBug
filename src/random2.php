<?php
/*
Random PHP Bug
Brad Detchevery / Aug 05, 2021

Unlike random.php. this file includes  'session_start()' command. 
Note: Open this one in the browser, and click 'view source' to reproduce the 
situation noted by Mr. Crawford. The 'View Source' page always displays a new
random sequence on the screen then the orginal. Interesting isn't it?
*/

session_start(['cookie_lifetime' =>86400,]);
function generateRandomString($len=32)
{
return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',$len)),0,$len);
}
$clientStr=generateRandomString();
echo "Result is: $clientStr";
?>
