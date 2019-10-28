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
    $good = false;
    if(isset($_POST["user"]) && isset($_POST["pass"])){
      /* Logowanie */
      $file = fopen("zadankologin/loginy.txt","r") or die("Unable to open");
        while(!feof($file)){
          $line = fgets($file);
          list($user, $pass) = explode(';', $line);
          if(trim($user) == $_POST['user'] && trim($pass) == $_POST['pass']){
              $good=true;
              fclose($file);
              break;
          }
      }
      if($good){
        echo 'Zalogowano pomyslnie';
      }
      else{
        echo 'Niepoprawne dane';
        $data = date('m/d/Y h:i:s a', time());
        $error = fopen("zadankologin/error.txt","a") or die("Unable to open");
        $txt =  "Nieudane logowanie! Ktos probowal sie zalogowac uzywajac danych: " . $_POST["user"] . " " . $_POST["pass"] . " o godzinie " . $data;
        fwrite($error,$txt);
        fclose($error);
      }

    }
    else{
      print '
        <form action="kolejnezadanieAAAAAAA.php" method="post">
          Login: <input type="text" name="user">
          Password: <input type="password" name="pass">
          <input type="submit" value="Wyslij">
        </form>
      ';
    }
     ?>
  </body>
</html>
