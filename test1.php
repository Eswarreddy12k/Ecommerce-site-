

<?php
$myfile = fopen("5.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("5.php"));
echo html_entity_decode(fread($myfile,filesize("5.php")));
fclose($myfile);
?>