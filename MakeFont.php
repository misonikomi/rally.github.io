<?php

$read = file_get_contents($argv[1]);
$str = strip_tags($read);

$str = str_replace("\n", "", $str);
$str = str_replace("", "", $str);
$str = str_replace(" ", "", $str);
$str = str_replace("\t", "", $str);

$fp = fopen("needs.txt", "a");
fwrite($fp, $str);
fclose($fp);