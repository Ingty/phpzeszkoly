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
      $file = fopen("31.txt","r");
      if($file){
        print('<table border="5">');
        while(($line=fgets($file)) !== false){
          print("<tr>");
          $i=0;
          $line=explode(";",$line);
          while($line[$i]){
            print('<td>'.$line[$i].'</td');
            $i++;
          }
          print('</tr>');
        }
        print('</table>');
      }
     ?>
  </body>
</html>
