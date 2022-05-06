<?php
$title = $_POST["title"];
$head = $_POST["head"];
$body = $_POST["content"];
$foot = $_POST["footer"];

$file = fopen("$title.html", "a+");
fwrite($file, $head);
fwrite($file, "<h2>$title</h2>");
fwrite($file, $body);
fwrite($file, $foot);
fclose($file);
header("location: $title.html");
?>