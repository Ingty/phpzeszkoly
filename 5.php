<?php
$x = 5;
$y = 10;
function pleaseSendHelp2(){
	$GLOBALS['y'] = $GLOBALS['y'] + $GLOBALS['x'];
}
echo "x = $x y = $y <br>";
pleaseSendHelp2();
echo "x = $x y = $y <br>";
?>
