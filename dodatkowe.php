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
      error_reporting (0);
      $file = fopen("dodatkowe.txt","r");
      if($file){
        while(($line=fgets($file)) !== false){
          $i=0;
          $line=explode(";",$line);
          while($line[$i]){
            print('filename:'.$line[$i].'');
            $i++;
          }
          print('<br>');
        }
      }
     ?>
  </body>
</html>
