<?php

$result = $_GET['src'];
header('Content-Type: image/png');
$name = "uploads/".$result;
readfile($name);

?>
