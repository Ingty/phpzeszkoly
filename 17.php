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
    <form action="17.php" method="get">
      Name: <input type="text" name="name"><br>
      <input type="submit">
    </form>
    <?php $cos=$_GET["name"];
    echo $cos; ?>
  </body>
</html>
