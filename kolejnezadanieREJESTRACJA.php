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
      if(isSet($_POST["login"])&&isSet($_POST["password"])){
        $login = $_POST["login"];
        $password = $_POST["password"];
        $plik = fopen("zadankologin/loginy.txt","a") or die("Nie ma takiego pliku");
        $txt = $login . ";" . $password . "\n";
        fwrite($plik,$txt);
        print 'Pomyslnie zarejestowano';
      }
      else{
        print '
          <form action="kolejnezadanieREJESTRACJA.php" method="post">
            Login: <input type="text" name="login">
            Password: <input type="password" name="password">
            <input type="submit" value="Wyslij">
          </form>
        ';
      }
     ?>
  </body>
</html>
