<?php
function AAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaAAAAAAAAAAAAAAAAAA($kurs, $kwota){
  $kwota=$kwota*$kurs;
  return $kwota;
}
$kurs = 4.09;
$kwota=AAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaaAAAAAAAAAAAAAAAAAA($kurs, 10);
echo "wynik: $kwota";
?>
