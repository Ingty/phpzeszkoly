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
      if(isSet($_POST["name"])){
      $cos=$_POST["name"];
      print 'Wpisana wartość to <b>';
      print $cos;
      print '</b><br> <a href="19.php">Powrot</a>';
      }
      else{
        print '
        <form action="19.php" method="POST">
          Name: <input type="text" name="name"><br>
          <input type="submit">
        </form>
        ';
      }
     ?>
  </body>
</html>
