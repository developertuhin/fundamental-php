<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.form{
			width: 50%;
			margin: auto;
			padding:100px 300px;
		}
		input[type="text"]{
			width: 300px;
			padding: 10px;
			border-radius: 10px;
			border-outline:none;

		}
	</style>
</head>
<body>
	<div class="form">
	<?php 
		if (isset($_POST['text'])) {
			global $text;
			$text = $_POST['text'];
			
			echo "Upper Case: ". strtoupper($text)."<br>";
			echo "Lower Case: ". strtolower($text)."<br>";
			echo "Capitalize: ". ucfirst($text)."<br>";
			echo "Camale Case: ". ucwords($text);
		}
	 ?>

	 
	 	<h3>PHP Case </h3>
 	 <form action="" method="post">
	 	<input type="text" name="text" placeholder="write something.." value="<?php global $text; echo $text;?>"><br><br>
	 	<input type="submit" value="Submit">
 	</form>
 </div>
</body>
</html>