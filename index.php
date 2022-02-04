<?php

$myFile = fopen("sample-text.txt", "r") or die("Unable to open file!");

$fileContent = fread($myFile,filesize("sample-text.txt"));

preg_match_all("/\[([^\]]*)\]/", $fileContent, $matches);
$string = '';
$counter = 0;

foreach($matches[1] as $element) {
  $string .= $element;
  $counter++;
  if(count($matches[1]) === $counter){
    logToConsole($string);
  }
}
fclose($myfile);

function logToConsole($string) {
  echo $string;
  // Print to browser's console
  echo '<script>console.log("'. $string .'");</script>';
}

