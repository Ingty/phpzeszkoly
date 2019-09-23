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
    ----POST----<br>
    Witaj: <?php echo $_POST["name"]; ?><br>
    Na ten email bedziesz dostawać spam: <?php echo $_POST["email"]; ?><br>
    ----GET----<br>
    Witaj: <?php echo $_GET["name"]; ?><br>
    Na ten email bedziesz dostawać spam: <?php echo $_GET["email"]; ?><br>
  </body>
</html>
