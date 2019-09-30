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
    if(isSet($_POST["a"])&&isSet($_POST["b"])&&isSet($_POST["c"])){
      $a = $_POST["a"];
      $b = $_POST["b"];
      $c = $_POST["c"];
      if(is_numeric($a)&&is_numeric($b)&&is_numeric($c)){
        if(!empty($a)&&!empty($b)&&!empty($c)){
          $delta = ($b*$b)-(4*$a*$c);
          echo "a: ";
          echo $a;
          echo "<br>";
          echo "b: ";
          echo $b;
          echo "<br>";
          echo "c: ";
          echo $c;
          echo "<br>";
          echo "Delta: ";
          echo $delta;
          echo "<br>";
          if($delta<0){
            echo "Brak pierwiastkow";
            echo "<br>";
          }
          else if($delta==0){
            echo "Pierwiastek: ";
            echo -$b/2*$a;
            echo "<br>";
          }
          else{
            echo "Pierwiastek 1: ";
            echo (-$b-sqrt($delta))/2*$a;
            echo "<br>";
            echo "Pierwiastek 2: ";
            echo (-$b+sqrt($delta))/2*$a;
            echo "<br>";
          }
        }
        else{
          echo "Wprowadz wartosci";
        }
      }
      else{
        echo "Wprowadz liczby";
      }
    }
    else{
      print '
      <form action="24.php" method="post">
        A:<input type="text" name="a"><br>
        B:<input type="text" name="b"><br>
        C:<input type="text" name="c"><br>
        <input type="submit" value="wyslij">
      </form>
      ';
    }
     ?>
  </body>
</html>
