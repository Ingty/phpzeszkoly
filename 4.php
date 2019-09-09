<?php
$x = 5;
$y = 10;
function pleaseSendHelp(){
	global $x,$y;
	$y = $x + $y;
}
echo "x = $x y = $y <br>";
pleaseSendHelp();
echo "x = $x y = $y <br>";
?>