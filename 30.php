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
      $myfile = fopen("30.txt","w") or die("Unable to open");
      $txt = "Test";
      for($i=0;$i<1000;$i++){
        fwrite($myfile,$txt);
        echo $i;
        echo "<br>";
      }
      fclose($myfile);
     ?>
  </body>
</html>
