<?php

ob_start();

echo "<style>
*{
	font-family:monospace;
	font-size:50px;
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

function plot($x,$y,$char,$grd){
	$gy = (count($grd) - $y)-1;
	$grd[$gy]=substr_replace($grd[$gy],$char,$x,1);
	return $grd;
}

function addYnums($grd){
	for ($i = 0; $i < count($grd); ++$i) {
		$grd = plot(0,$i,$i,$grd);
	}
	return $grd;
}

foreach($grid as $row){
	echo $row . '<br>';
}
