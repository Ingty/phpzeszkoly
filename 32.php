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
      $dir = "cpp";
      if(is_dir($dir)){
        if ($dh = opendir($dir)){
          while(($file = readdir($dh)) !== false){
            echo "filename: " . $file . "<br>";
          }
          closedir($dh);
        }
      }
     ?>
  </body>
</html>
