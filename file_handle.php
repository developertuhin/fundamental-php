<?php 
	$myfile = fopen("textfile.txt", "r") or die("File not found !!! ");
	echo fgets($myfile);
	fclose($myfile);
 ?>


 <div class="upload">
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

			<div class="upload">
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
			