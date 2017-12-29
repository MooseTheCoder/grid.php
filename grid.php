<?php

ob_start();

echo "<style>
*{
	font-family:monospace;
}
</style>";

$grid = [
"|....................",
"|....................",
"|....................",
"|....................",
"|....................",
"|....................",
"|....................",
"|....................",
"|....................",
"|____________________",
];

function grid($x,$y,$grd){
	$gy = (count($grd) - $y)-1;
	return substr($grd[$gy],$x,1);
}

function plot($x,$y,$grd,$char){
	$gy = (count($grd) - $y)-1;
	$grd[$gy]=substr_replace($grd[$gy],$char,$x,1);
	return $grd;
}

$grid = plot(10,5,$grid,"y");

foreach($grid as $row){
	echo $row . '<br>';
}
