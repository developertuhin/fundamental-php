<?php 
	$fonts = "verdana";
	$bgcolor="#090122 ";
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
		.header, .footer h2{color: #fff; text-align: center; font-size: 20px; border-left: 2px solid green; }
		
		.main-content{min-height: 400px; padding: 30px;font-size: 30px;}
		.main-content h2{color: #F28D79; font-size: 22px}
	</style>
</head>
<body>
	<div class="main">
		<section class="header">
			<h2>PHP- Operator</h2>
		</section>

		<section class="main-content">
			<h2>Arithmetic Operators : </h2>
			<?php 
				
				$x = 5;
				$y=10;
				echo 'Addition : ';
				echo $x+$y."<br>";

				echo 'Substraction: ';
				echo $x-$y."<br>";

				echo 'Multiplication : ';
				echo $x*$y."<br>";

				echo 'Division : ';
				echo $x/$y."<br>";

				echo 'Reminder : ';
				echo $x%$y;
			 ?>
			 <hr>
			 <h2>Assignment Operator: </h2>
			 <?php 
			 	$a = 10;
			 	$a +=20;

			 	$b = 50;
			 	$b -=30;

			 	$c= 5;
			 	$c *=4;

			 	$d = 26;
			 	$d %=5;

			 	$e = 100;
			 	$e /=20;

			 	echo "+= ". $a. ",  -=  ".$b. ",  *=  ".$c.",  %=  ".$d. ",  /=  ".$e;
			  ?>
			  <hr>
			  <h2>Comparison Operator: (==, ===, !=, !==, <, >) </h2>
			 	<?php 
			 		 $p= 10;
					  $q=20;
					  echo var_dump($p==$q);
			 	 ?>

			  <hr>
			  <h2>String Operator : </h2>
			  <?php 
			  	$m= "Training with";
			  	$n=" Tuhin Khan";
			  	$m .=$n;
			  	echo $m;
			   ?>
			 
		</section>

		<section class="footer">
			<h2><?php echo 'learn-php-2021 with tuhinkhan'; ?></h2>
		</section>
	</div>

</body>
</html>