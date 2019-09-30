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
      $hasla = array('admin'=>'okon','tester'=>'tester15');
      if(isSet($_POST['user'])&&isset($_POST['password'])){
        if(array_key_exists($_POST['user'],$hasla)&&($hasla[$_POST['user']]== $_POST['password'])){
          echo "Tajna informacja to 2*2=5";
        }
        else{
          echo "Bledne haslo lub login";
        }
      }
      else{
        print '
        <form action="25.php" method="post">
          Login:<input type="text" name="user"><br>
          Haslo:<input type="password" name="password"><br>
          <input type="submit" value="wyslij">
        </form>
        ';
      }
     ?>
  </body>
</html>
