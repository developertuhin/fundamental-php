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
			<h3>Array Sorting </h3>

			<?php 
				$name= array("Tuhin ", "Riaj","Arafat","Sumon","Orin");
				$num =array(21,2,33,54,5,1,44);
				sort($name);
				sort($num);
				$length_name = count($name);
				$length_num = count ($num);

				for ($i = 0; $i <$length_name ; $i++) {
					echo $name[$i]."</br>";
				}
				echo "<br>";
				for ($j = 0; $j <$length_num ; $j++) {
					echo $num[$j]."<br>";
				}
			 ?>

			 <hr>
			 <hr>
			 <h2>SuperGlobals Variable</h2>
				<?php 
					echo $_SERVER['PHP_SELF'];
					echo '<br>';
					echo $_SERVER['SERVER_NAME'];
					echo '<br>';
					echo $_SERVER['SCRIPT_NAME'];
					echo '<br>';
					echo $_SERVER['SERVER_ADDR'];
					echo '<br>';

					echo $_SERVER['HTTP_USER_AGENT'];

				 ?>
		</section>

		<section class="footer">
			<h2><?php echo 'learn-php-2021 with tuhinkhan'; ?></h2>
		</section>
	</div>

</body>
</html>