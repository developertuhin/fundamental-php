<?php 
	$fonts = "verdana";
	$bgcolor="#F28D79";
	// error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning-PHP</title>
	<style>
		body{font-family: <?php echo $fonts; ?>}
		.main{ width: 80%; height: 600px; margin:auto;}
		.header, .footer{background-color:<?php echo $bgcolor?>;padding:20px}
		
		.main-content{min-height: 400px;padding: 30px;font-size: 30px}
		 h2{color: #fff; text-align: center;}
		}
	</style>
</head>
<body>
	<div class="main">
		<section class="header">
			<h2>PHP- Filter</h2>
		</section>

		<section class="main-content">
			<h4>Filter - string</h4>
			<?php 
				$str = "I love to code with php !!";
				$strfltr = filter_var($str,FILTER_SANITIZE_STRING);
				echo $strfltr;
			 ?>
			 <hr>
			 <h4>Filter - int</h4>
			<?php 
				$value = "3.3";
				echo $value;
				$filtint = filter_var($value,FILTER_VALIDATE_INT);
				if ($filtint) {
					echo ' <span style="color:green">is integer ...</span>';
				}else{
					echo ' <span style="color:red">is not integer ...</span>';
				}
			 ?>
			 <hr>
			 <h4>Filter-IP</h4>
			 <?php 
			 	$ip = "168.0.0.1.0.9";
			 	$filter_ip = filter_var($ip,FILTER_VALIDATE_IP);
			 	if ($filter_ip) {
			 		echo $ip.'<span style= "color:green"> is validate IP address .</span>';
			 	}else{
			 		echo $ip.' <span style= "color:red"> is not validate IP address .</span>';
			 	}
			  ?>

			  <hr>
			 <h4>Filter-Email</h4>
			 <?php 
			 	$mail = "tuhin@gmail.com";
			 	$filter_mail = filter_var($mail,FILTER_VALIDATE_EMAIL);
			 	if ($filter_mail) {
			 		echo $mail.'<span style= "color:green"> is validate Email address .</span>';
			 	}else{
			 		echo $mail.' <span style= "color:red"> is not validate Email address .</span>';
			 	}
			  ?>

			  <hr>
			 <h4>Filter-URL</h4>
			 <?php 
			 	$url= "http://tuhin.com";
			 	$filter_url = filter_var($url,FILTER_VALIDATE_URL);
			 	if ($filter_url) {
			 		echo $url.'<span style= "color:green"> is validate Url address .</span>';
			 	}else{
			 		echo $url.' <span style= "color:red"> is not validate URL address .</span>';
			 	}
			  ?>
			  <hr>
			  <h5>Filter Advance : </h5>
			  <?php 
			  	$num = 300;
			  	$min = 1;
			  	$max = 400;

			  	$num_range = filter_var(
			  		$num,FILTER_VALIDATE_INT,
			  		array(
			  			"options"=>array("min_range"=>$min,"max_range" =>$max)
			  		)
			  	);
			  	if ($num_range) {
			  		echo $num.' <span style= "color:green"> is  validate range .</span>';
			  	}else {
			  		echo $num.' <span style= "color:red"> is not validate range .</span>';
			  	}
			   ?>

		</section>
		<section class="footer">
			<h2><?php echo 'learn-php-2021 with tuhinkhan'; ?></h2>
		</section>
	</div>

</body>
</html>