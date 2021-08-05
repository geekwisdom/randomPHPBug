<?php
/*
Random PHP Bug
Brad Detchevery / Aug 05, 2021

This file simply displays some random characters on the screen each time the
page is refreshed. Nothing too special to see here. When you click 'view source' on the browser you will see the same characters in the source.
*/

function generateRandomString($len=32)
{
return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',$len)),0,$len);
}
$clientStr=generateRandomString();
echo "Result is: $clientStr";
?>
