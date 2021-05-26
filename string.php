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
			<h3>PHP-String</h3>
			<?php 
				$x = "I love PHP";
				echo strlen("String Length : ".$x)."<br>";
				echo str_word_count($x)."<br>";
				echo strrev($x)."<br>";
				echo str_replace("PHP", "JavaScript", $x)

			 ?>
			 <hr>
			 
			 <h3>PHP - constant</h3>
			 <?php 
			 	define("VALUE", "My target is to learn php so professionally...",true);
			 	// echo VALUE;
			 	// echo value;
			 	function cons(){
			 		return VALUE;
			 	}
			 	echo cons();
			  ?>

		</section>

		<section class="footer">
			<h2><?php echo 'learn-php-2021 with tuhinkhan'; ?></h2>
		</section>
	</div>

</body>
</html>