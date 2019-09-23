<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        background: black;
        color: #FC0;
      }
      input{
        background: black;
        border: 1px solid #fc0;
        color: #FC0;
      }
    </style>
  </head>
  <body>
    <?php
      $nameErr = $emailErr = $genderErr = $websiteErr = "";
      $name = $email = $gender = $comment = $website = "";
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
          $nameErr = "Imie wymagane";
        }
        else{
          $name = test_input($_POST["name"]);
        }
        if(empty($_POST["email"])){
          $emailErr = "Email wymagany";
        }
        else{
          $email = test_input($_POST["email"]);
        }
        if(empty($_POST["gender"])){
          $genderErr = "Gender wymagany";
        }
        else{
          $gender = test_input($_POST["gender"]);
        }
        if(empty($_POST["website"])){
          $websiteErr = "Strona wymagana";
        }
        else{
          $website = test_input($_POST["website"]);
        }
        if(empty($_POST["comment"])){
          $comment = "";
        }
        else{
          $comment = test_input($_POST["comment"]);
        }
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
     ?>
     <h2>PHP Form Validation Example</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email"><span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website"><span class="error">* <?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
      </form>

      <?php
      echo "<h2>Your Input:</h2>";
      echo $name;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $website;
      echo "<br>";
      echo $comment;
      echo "<br>";
      echo $gender;
      ?>
  </body>
</html>
