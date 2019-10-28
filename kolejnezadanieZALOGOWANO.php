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
      a:link {
        color: #FC0;
      }
      a:visited {
        color: #FC0;
      }
      a:hover {
        color: #FC5;
      }
      a:active {
        color: #FC0;
      }
    </style>
  </head>
  <body>
    <?php
    function zalogowano(){
      echo 'Pomyslnie zalogowano<br>';
      echo 'Ostatnie udane logowanie: ';
      echo $_COOKIE["lastloginingty"];
      $data = date('m/d/Y h:i:s a', time());
      setcookie("lastloginingty", $data, time() + (3600 * 365 * 24));
    }
      if(isSet($_COOKIE["ankietaingty"])&&$_COOKIE["ankietaingty"]=="tak"){
        zalogowano();
      }
      else{
        if(isSet($_POST["typ"])){
          if($_POST["typ"]=="Tak"){
            $cookie_name = "ankietaingty";
            $cookie_value = "tak";
            setcookie($cookie_name, $cookie_value, time() + (3600 * 1));
            zalogowano();
          }
          else{
            $cookie_name = "ankietaingty";
            $cookie_value = "nie";
            setcookie($cookie_name, $cookie_value, time() + (3600 * 1));
            zalogowano();
          }
        }
        else{
        echo 'Czy chcesz wziac udzial w ankiecie?<br>
              <form action="kolejnezadanieZALOGOWANO.php" method="post">
              <input type="radio" id="Tak" name="typ" value="Tak" checked>
              <label for="Tak">Tak</label>
              <input type="radio" id="Nie" name="typ" value="Nie">
              <label for="Nie">Nie</label>
              <input type="submit" value="Wyslij">
              </form>';}
      }
     ?>
  </body>
</html>
