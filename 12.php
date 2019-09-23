<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        background: black;
        color: #FC0;
      }
    </style>
  </head>
  <body>
    <?php
      $tablica = array("jablka"=>"1kg","gruszki"=>"2kg");
      echo "test tablic<br>";
      echo "<br>tekst: $tablica[jablka] i inne";
      echo "<br><br>";
      $samochody = array("Wolwo","Tojota","BMW","Subaru");
      echo "A ja lubie $samochody[0], $samochody[1], $samochody[2] i $samochody[3]";
      echo "<br><br>";
      echo count($samochody);
      echo "<br><br>";
      $arrlength = count($samochody);
      for($x = 0;$x<$arrlength;$x++){
        echo $samochody[$x];
        echo "<br>";
      }
      echo "<br><br>";
      $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"42");
      echo "Peter is " . $age['Peter'] . " years old.<br>";
      echo "<br><br>";
      foreach($age as $x => $x_value){
        echo "Key= " . $x . ", Value=" . $x_value;
        echo "<br>";
      }
      echo "<br><br>
            sort() - sortowanie tablic rosnaco<br>
            rsort() - sortowanie malejaco<br>
            asort() - sortowanie asocjacyjnych rosnaco, wg wartosci<br>
            ksort() - sort asocjacyjnych rosnaco, wg klucza<br>
            arsort() - sort asocjacyjnych malejaco, wg wartosci<br>
            krsort() - sort asocjacyjnych malejaco, wg klucza<br>"
     ?>
  </body>
</html>
