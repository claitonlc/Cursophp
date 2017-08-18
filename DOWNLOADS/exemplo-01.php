<?php

$link = "http://cdn02.androidauthority.net/wp-content/uploads/2016/06/android-win-2-300x162.png";

$content =  file_get_contents($link);

$parse =  parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

//var_dump($basename);

?>

<img src="<?=$basename?>">