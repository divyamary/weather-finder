<?php

$city= $_GET['city'];
$prepcity = str_replace(' ', '', $city);

$contents = file_get_contents("http://www.weather-forecast.com/locations/$prepcity/forecasts/latest");

preg_match('/<span class="phrase">(.*?)<\/span>/s',$contents, $matches);

print_r($matches[1]);


?>