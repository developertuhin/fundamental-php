<?php 
	$fonts = "roboto";
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
		.main{ width: 70%; height: 600px; margin:auto;}
		.header, .footer{background-color:<?php echo $bgcolor?>;padding:50px}
		.footer p{
			text-align: center;
			color: #fff;

		}
		
		.main-content{min-height: 400px;padding: 30px;font-size: 30px;margin:auto;}
		 h2{color: #fff; text-align: center;}
		 h3{
		 	text-align: center;
		 }
		.grid{

			float: left;
			overflow: hidden;
		}
		.grid img{
			width: 400px;
			height: 350px;
			margin-left: 30px;
		}
		#form{
			border-left:5px dashed skyblue;
			padding: 5px 10px;
		}
		#form input{
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
		}
		#form textarea{

			width: 200px;
			margin-left: 10px;
			border-radius: 5px;
		}
		.time{
			float: left;
		}
		.date{
			float: right;
		}
	</style>
</head>
<body>
	<div class="main">
		<section class="header">
		<div class="time">
			<?php 
				echo "<span style='color:#fff;font-weight:900; '><span style='color:#000 ; font-size:20px'>Date: </span>  <span>".date('d/m/Y');
			echo '<br>';
			 ?>
		</div>
		<div class="date">
				<?php 
			
			date_default_timezone_set('Asia/Dhaka');
			echo "<span style='color:#fff;font-weight:900; '><span style='color:#000 ; font-size:20px'>Time: </span>  <span>".date('h:i:s A');
		 ?>
		</div>
			
			
		</section>


		<section class="main-content">
			<form action="" method="post" class="grid" id="form">
				<table>
					<tr>
						<td><small style="color:red"> *</small>Name</td>
						<td>:</td>
						<td><input type="text" name="username" placeholder=" your name " required></td>
					</tr>

					<tr>
						<td><small style="color:red"> *</small>Email</td>
						<td>:</td>
						<td><input type="text" name="email" placeholder=" your email "required></td>
					</tr>

					<tr>
						<td><small style="color:red"> *</small>Website</td>
						<td>:</td>
						<td><input type="text" name="website" placeholder=" your website "required></td>
					</tr>

					<tr>
						<td>Comment</td>
						<td>:</td>
						<td><textarea name="comment" id="" cols="40" rows="8" placeholder="please wright something .."></textarea></td>
					</tr>
					<tr>
						<td><small style="color:red"> *</small>Gender</td>
						<td>:</td>
						<td><input type="radio" name="gender" value="male" id="male">Male
						<input type="radio" name="gender" value="female" id="female">Female</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="submit" value="Submit" style="padding:5px 20px; border-radius: 20px 0px;font-size: 20px;background-color: green; color: #fff"></td>
					</tr>
				</table>
			</form>
			<div class="grid">
				<img src="https://cloudinary-res.cloudinary.com/image/upload/c_fill,w_770/dpr_3.0,f_auto,fl_lossy,q_auto/php_upload_cover_blog.jpg" alt="">
			</div>
			</section>
			
		<div style="padding: 10px; text-align: center;width: 50%; margin: auto;">
			<?php 
				$name=$email=$website=$comment=$gender= " ";
				if ($_SERVER['REQUEST_METHOD']=='POST') {
					$name = validate($_POST['username']);
					$email = validate($_POST['email']);
					$website = validate($_POST['website']);
					$comment = validate($_POST['comment']);
					$gender = validate($_POST['gender']);


					echo "<span style='color:green;'><h3>Submitted Successfully !!!</h3></span>";
					echo "<span style= 'color:blue;margin-right:15px; font-size:20px'>Name</span>: ".$name."<br>";
					echo "<span style= 'color:blue;margin-right:15px; font-size:20px'>Email</span>: ".$email."<br>";
					echo "<span style= 'color:blue;margin-right:15px; font-size:20px'>Website</span>: ".$website."<br>";
					echo "<span style= 'color:blue;margin-right:15px; font-size:20px'>Comment</span>: ".$comment."<br>";
					echo "<span style= 'color:blue;margin-right:15px; font-size:20px'>Gender</span>: ".$gender."<br>";

					
				}
				function validate($data){
					$data = trim($data);
					$data = stripcslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}	
			 ?>
		</div>


		

		<section class="footer">
			<h2>Learn PHP with Tuhin khan</h2>
			<p>reserved &copy; tuhinkhan <?php echo date('Y')?></p>
		</section>
	</div>

</body>
</html>