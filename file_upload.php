<?php 
	$fonts = "verdana";
	$bgcolor="#F28D79";
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning-PHP</title>
	<style>
		.main{
			width: 80%;
			margin: auto;
			padding: 30px;
			background-color: salmon;
			min-height: 100vh;
		}
	
		.half-width{
			width: 40%;
			border:2px solid white;
			float: left;
			overflow: hidden;
			padding:10px 50px;
			

			}
			.half-width img{
				width: 500px;
			}
	
	</style>
</head>
<body>
	<div class="main">
		<section class="header">
			<h2>PHP- File Upload</h2>
		</section>

		<section class="main-content">
			<div class="half-width">
				<h3>Upload your file : </h3>
			<?php 
				// if (isset($_FILES['image'])) {
				// 	$name    = $_FILES['image']['name'];
				// 	$tmpname = $_FILES['image']['tmp_name'];
				// 	move_uploaded_file($tmpname,"images/".$name);
				// 	echo 'file uploaded successfully  !!!';

				// }

				if (isset($_FILES['image'])) {
					$file_name = $_FILES['image']['name'];
					$tmpname = $_FILES['image']['tmp_name'];

					move_uploaded_file($tmpname,"images/".$file_name);
					echo "<span style='color: green; padding:120px 0px'>File uploaded successfully !!!</span>";
				}
			 ?>
				<form action="" method="post" enctype="multipart/form-data">
					<input type="file" name="image"><br>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="half-width">
				<img src="https://www.popwebdesign.net/images/tutorial/php/tutorijali-php-banner.png" alt="">
			</div>

				<br>
				<hr>
				<h4>Session in php:</h4>
				<?php 
					

					$_SESSION['username'] = 'Tuhin Khan';
				    $_SESSION['password'] = '1234';

					echo 'Username is : '.$_SESSION['username'].'<br>';
					session_destroy();
					echo 'Password is : '.$_SESSION['password'];
				 ?>
		</section>


		<!-- <section class="footer">
			<h2><?php echo 'learn-php-2021 with tuhinkhan'; ?></h2>
		</section> -->
	</div>

</body>
</html>