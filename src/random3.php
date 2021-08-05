<?php
/*
Random PHP Bug
Brad Detchevery / Aug 05, 2021

This file forces an expires date into the future and sets max-age as well
This ensures that the 'view-source' always displays the cache and NOT requests
a second copy of the page
*/

session_start(['cookie_lifetime' =>86400,]);
function generateRandomString($len=32)
{
return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',$len)),0,$len);
}
$clientStr=generateRandomString();
header('Cache-Control: max-age=86400');
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + ((60 * 60) * 48)));  // 2 days
echo "Result is: $clientStr";
?>
