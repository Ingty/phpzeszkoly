<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        background: black;
        color: #FC0;
      }
      input{
        background: none;
        border: 1px solid #fc0;
        color: #FC0;
      }
    </style>
  </head>
  <body>
    <?php
      if(isSet($_POST["a"])&&isSet($_POST["b"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $dzialanie = $_POST['dzialanie'];
            $los = $_POST['los'];
            if($los=="Losuj"){
              $alos = rand($a,$b);
              $blos = rand($a,$b);
              $a = $alos;
              $b = $blos;
              echo "<br> Los a:"; echo $a;
              echo "<br> Los b:"; echo $b;
              echo "<br>";
              }
            if($dzialanie=="*"){
              $wynik = $a * $b;
              echo "Wynik: ";
              echo $wynik;
              echo "<br>";
              if($wynik<0){
                echo $wynik;
                echo "<0";
              }
              else if($wynik==0){
                echo $wynik;
                echo "=0";
              }
              else if($wynik>0){
                echo $wynik;
                echo ">0";
              }
              if($wynik%2==0){
                echo "<br>";
                echo "Parzysta";
              }
              else{
                echo "<br>";
                echo "Nieparzysta";
              }
            }
            else if($dzialanie=="/"){
              if($b==0){
                echo "Cholero nie dziel przez zero";
              }
              else{
                $wynik = $a / $b;
                echo "Wynik: ";
                echo $wynik;
                echo "<br>";
                if($wynik<0){
                  echo $wynik;
                  echo "<0";
                }
                else if($wynik==0){
                  echo $wynik;
                  echo "=0";
                }
                else if($wynik>0){
                  echo $wynik;
                  echo ">0";
                }
                if($wynik%2==0){
                  echo "<br>";
                  echo "Parzysta";
                }
                else{
                  echo "<br>";
                  echo "Nieparzysta";
                }
              }
            }
            else if($dzialanie=="+"){
              $wynik = $a + $b;
              echo "Wynik: ";
              echo $wynik;
              echo "<br>";
              if($wynik<0){
                echo $wynik;
                echo "<0";
              }
              else if($wynik==0){
                echo $wynik;
                echo "=0";
              }
              else if($wynik>0){
                echo $wynik;
                echo ">0";
              }
              if($wynik%2==0){
                echo "<br>";
                echo "Parzysta";
              }
              else{
                echo "<br>";
                echo "Nieparzysta";
              }
            }
            else if($dzialanie=="-"){
              $wynik = $a - $b;
              echo "Wynik: ";
              echo $wynik;
              echo "<br>";
              if($wynik<0){
                echo $wynik;
                echo "<0";
              }
              else if($wynik==0){
                echo $wynik;
                echo "=0";
              }
              else if($wynik>0){
                echo $wynik;
                echo ">0";
              }
              if($wynik%2==0){
                echo "<br>";
                echo "Parzysta";
              }
              else{
                echo "<br>";
                echo "Nieparzysta";
              }
            }
          }
      else{
        echo '
        <form action="27.php" method="post">
          A:<input type="number" name="a"><br>
          B:<input type="number" name="b"><br>
          Dzialanie:<select name="dzialanie">
            <option name="*" value="*">*</option>
            <option name="/" value="/">/</option>
            <option name="+" value="+">+</option>
            <option name="-" value="-">-</option>
          </select>
          <input type="radio" id="los" name="los" value="Losuj" checked>
          <label for="los">Losuj</label>
          <input type="radio" id="nielos" name="los" value="Nie losuj">
          <label for="nielos">Nie losuj</label>
          <input type="submit" name="submit">
        </form>
        ';
      }
     ?>
  </body>
</html>
