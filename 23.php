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
    <form action="23.php" method="post">
      <input type="email" value="email">
      <input type="password" value="password">
      <input type="submit" value="continue">
    </form>
    <?php
      if(isset($_POST["mail"])&&!empty($_POST["mail"])&&!empty($_POST["password"])){
        $zmienna=$_POST["mail"];
        echo $zmienna;
      }
      else{
        echo "Nie ma maila";
      }
     ?>
  </body>
</html>
