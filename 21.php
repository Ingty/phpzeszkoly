<!DOCTYPE HTML>
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
	$name = $email = $gender = $comment = $website =" ";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = tekst_input($_POST["name"]);
		$email = tekst_input($_POST['email']);
		$website = tekst_input($_POST['website']);
		$gender = tekst_input($_POST['gender']);
		$comment = tekst_input($_POST['comment']);
	}
	function tekst_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
<form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="tekst" name="name">
	<br><br>
	E-mail: <input type="tekst" name="email">
	<br><br>
	Website: <input type="tekst" name="website">
	<br><br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	<br><br>
	Gender:
	<input type="radio" name="gender" value="female"> Female
	<input type="radio" name="gender" value="male"> Male
	<input type="radio" name="gender" value="other"> Apache
	<br><br>
	<input type="submit" name="submit" value="submit">
</form>

<?php
	echo "<h2> Twoj input: </h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
	echo "<br>";
?>
</body>
</html>
