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
			<h2>Function</h2>
		</section>

		<section class="main-content">
		
			<?php 
				function player(){
					echo 'I love Mooen Ali';
				};

				function country($name){
					echo "I love ".$name;
				}

				function student($stname,$stage,$stdept="BBA"){
					// echo 'Name : '.$stname." Age: ".$stage." Department : ".$stdept;
					echo "-> $stname is a good boy. His age is $stage. His department is $stdept ";
				}


				player();
				echo '<br>';
				country("Canada");
				echo '<br>';

				student("Tuhin Khan", 22, "CSE");
				echo '<br>';

				student("Arafat Rahman", 24, "Pharmacy");
				echo '<br>';

				student("RIaj",21);
				echo '<br>';

				// Return in function 
				function sum($x,$y){
					$s = $x+$y;
					return $s;
				}
				echo "Sum is : ".sum(20,30);
			 ?>	

		</section>

		<section class="footer">
			<h2><?php echo 'learn-php-2021 with tuhinkhan'; ?></h2>
		</section>
	</div>

</body>
</html>