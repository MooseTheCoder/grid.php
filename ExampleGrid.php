<?php

ob_start();

echo "<style>
*{
	font-family:monospace;
	font-size:50px;
}
</style>";

$grid = [
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|________________________"
];

function grid($x,$y,$grd){
	$gy = (count($grd) - $y)-1;
	return substr($grd[$gy],$x,1);
}

function plot($x,$y,$char,$grd){
	$gy = (count($grd) - $y) - 1;
	$grd[$gy]=substr_replace($grd[$gy],$char,$x,1);
	return $grd;
}

$mabbr = ['J','F','M','A','M','J','J','A','S','O','N','D'];
$cplot = 2;

foreach($mabbr as $month){
	$grid = plot($cplot,0,$month,$grid);
	$cplot = $cplot + 2;
}

$cplot = 2;

for ($i = 0; $i < count($grid); ++$i) {
	$grid = plot(0,$i,$i,$grid);
}

$eqiv = [9,5,6,6,2,3,3,4,5,0,7,2];

foreach($eqiv as $value){
	$current = 1;
	$value ++;
	while($current < $value){
		$grid = plot($cplot,$current,"X",$grid);
		$current ++;
	}
	$cplot = $cplot + 2;
}

foreach($grid as $row){
	echo $row . '<br>';
}
