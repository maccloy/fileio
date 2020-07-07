<?php

if (isset($_POST["text"])) {
    $text = $_POST["text"];
} else {
    $text = "";
}


$dir    = './';
$files = scandir($dir);



foreach ($files as $key => $value) {
$filename = explode(".", $value);
$len = count($filename);
$fileType = $filename[$len - 1];

if ($fileType == "txt") {
    print "<a href='read.php'> $value </a> <br>";
}

}


?>
<form method="post" action="write.php">

<textarea name="text"><?= $text ?></textarea>
<input type="submit"><input type="reset">


</form>