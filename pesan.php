<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Temukan Mobil Untuk Disewa</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<?php
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "cars";
                    
                    $conn = new mysqli($host, $user, $pass, $db);
                    if($conn->connect_error){
                        echo "Failed:" . $conn->connect_error;
                    }
                    
                    //read data
                    //$sql = "SELECT * FROM cars WHERE status = 'Available'";
                    $sql = "SELECT * FROM client ORDER BY client_id DESC LIMIT 1";
                    $rs = $conn->query($sql);
                    $row = $rs->fetch_assoc();
                

					echo "Terima Kasih " . $row['fname'] ." Telah Menyewa";
				?>
				<!--
				<h2 style="text-align:center; color:#FF0000; font-family: 'Courier New', Courier, monospace">Terima kasih telah menyewa, mohon ditunggu sebentar.</h2>
			    -->
			</ul>
			
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<h1>Setya Car Rental </h1>
	</footer><!--  end footer  -->
	
</body>
</html>