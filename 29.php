<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        color: #ffffff;
        background: url("29.jpg") repeat;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 18px;
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
      $myfile = fopen("29.inc", "r") or die("nie da rady");
      echo fread($myfile,filesize("29.inc"));
      fclose($myfile);
      echo "<br><br>Rozmiar pliku: ";
      echo filesize("29.inc");
      echo "<br><br>";
      $myfile2 = fopen("29.jpg", "r") or die("nie da rady");
      fclose($myfile2);
      echo "<br><br>Rozmiar zdjecia: ";
      echo filesize("29.jpg");
     ?>
  </body>
</html>
