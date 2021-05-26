<?php 
	$fonts = "verdana";
	$bgcolor="#F28D79";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning-PHP</title>
	<style>
		body{font-family: <?php echo $fonts; ?>}
		.main{background-color: lightgray; width: 80%; height: 600px; margin:auto;}
		.header, .footer{background-color:<?php echo $bgcolor?>;padding:20px}
		
		.main-content{min-height: 400px;padding: 30px;font-size: 30px}
		 h2{color: #fff; text-align: center;}
		}
	</style>
</head>
<body>
	<div class="main">
		<section class="header">
			<h2>PHP- String, Constant</h2>
		</section>

		<section class="main-content">
			<h3>PHP-Super global variables </h3>
			
			<form action="" method="post">
				User Name : <input type="text" name="username"><br>
				Email : <input type="text" name="email"><br>
				<input type="submit" value="Submit">
			</form>

			<?php 
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$uname = $_REQUEST['username'];
					$email = $_REQUEST['email'];
					if (empty($uname && $email)) {
						echo "<span style='color:red'>Username & Email field  must not be empty !!</span>";
					}	
					else {
						echo "<span style='color:green'>Submitted username = ".$uname."<br> Submitted email: ".$email."</span>";
					}
				}
			 ?>

		</section>

		<section class="footer">
			<h2><?php echo 'learn-php-2021 with tuhinkhan'; ?></h2>
		</section>
	</div>

</body>
</html>