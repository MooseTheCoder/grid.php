<?php

ob_start();

echo "<style>
*{
	font-family:monospace;
	font-size:50px;
}
</style>";

$grid = [
"|.......................",
"|.......................",
"|.......................",
"|.......................",
"|.......................",
"|.......................",
"|.......................",
"|.......................",
"|.......................",
"|.......................",
"|_______________________"
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

$mabbr = ['J','F','M','A','M','J','J','A','S','O','N'];
$cplot = 2;

foreach($mabbr as $month){
	$grid = plot($cplot,0,$month,$grid);
	$cplot = $cplot + 2;
}

for ($i = 0; $i < count($grid); ++$i) {
	$grid = plot(0,$i,$i,$grid);
}

foreach($grid as $row){
	echo $row . '<br>';
}
