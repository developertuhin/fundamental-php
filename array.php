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
		.main{ width: 80%; height: 600px; margin:auto;}
		.header, .footer{background-color:<?php echo $bgcolor?>;padding:20px}
		.header, .footer h2{color: #fff; text-align: center; font-size: 20px; border-left: 2px solid green; }
		
		.main-content{min-height: 400px; padding: 30px;font-size: 30px;}
		.main-content h2{color: #F28D79; font-size: 22px}
		}
	</style>
</head>
<body>
	<div class="main">
		<section class="header">
			<h2>php Array </h2>
		</section>

		<section class="main-content">
			<hr>
			<hr>
			<h2>Indexed Array : </h2>

			<?php 
				$x = array(10,20,30,40,50);
				$len =count($x);
				for ($i=0; $i<=$len; $i++) {
					echo $x[$i];
					echo '<br>';
				}

			 ?>
			 <hr>
			 <hr>
			 <h2>Associative Array : </h2>
			 <?php 
			 	$friends = array("Arafat"=>"Barishal", "Riaj"=>"Noakhali", "Sumon"=>"Ponchogor", "Orin"=>"SatKhira");
			 	foreach ($friends as $friend => $value) {
			 		echo "Name = ".$friend.", "."District = ".$value;
			 		echo '<br>';
			 	}
			  ?>
			  <hr>
			  <hr>
			  <h2>MultiDimensional Array : </h2>
			  <!-- <?php 
			  	$sub = array(
			  				array("Physics", 80, "A+"),
			  				array("Chemistry", 70, "A"),
			  				array("Biology", 60, "A-"),
			  				array("Mathematics", 30, "F")
			  	);

			  		
			  		for ($row = 0; $row <4 ; $row++) {
			  			echo "<p>Row Number : $row</p>";
			  			echo "<ul>";
			  			for ($col = 0; $col <3 ; $col++) {
			  				echo "<li>".$sub[$row][$col]."</li>";
			  			}
			  			echo "</ul>";
			  		}
			  		?>
			  		<hr>


 -->
 		<?php 
 			$skill=array(
 						array("Html", 80),
 						array("CSS", 70),
 						array("JavaScript", 50),
 						array("PHP",40)
 			);
 			$length = count($skill);
 			for ($i = 0; $i <$length ; $i++) {
 				echo "<p> Number of row : $i</p>";
 				for ($j = 0; $j <2 ; $j++) {
 					echo "<ul>";
 						echo "<li>".$skill[$i][$j]."</li>";
 					echo "</ul>";
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