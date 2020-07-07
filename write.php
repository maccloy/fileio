<?php


$text = $_POST["text"];

$handle = fopen("file.txt", "w");
fwrite($handle, $text);
fclose($handle);

header("Location: index.php")






?>