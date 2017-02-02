<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="./map.css">
	</head>
	<body>
	<h1>Thank you for hiring a car with us <?php echo $_POST["Name"]?> <?php echo $_POST["Surname"]?> </h1>
	<table border="1">
			<tr>
				<th>
					<a href="./index.html">Welcome page</a>
				</th>
				<th>
					<a href="./Form.html">Hire a car</a>
				</th>
				<th>
					<a href="./customer information.html">Previous Hires</a>
				</th>
			</tr>
		</table>
		<p>You're selected car will be ready on the date you have requested <?php echo $_POST["Datefrom"]?> </p>
		<p>Please come pick up the car you have hired here</p>
		<p>Can you also make sure you bring the car back after these many days <?php echo $_POST["Numberofdays"]?> </p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16137407.932128442!2d-84.05740252503426!3d-9.08226241742479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c850c05914f5%3A0xf29e011279210648!2sPeru!5e0!3m2!1sen!2suk!4v1485942884325" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<p>It will cost you this much money</p>
		<p id="cost"></p>
		<img id="carImage" src=""></img>
		<script>
			var carName = "<?php echo $_POST["carSelect"]?>";
			var numberOfDays = <?php echo $_POST["Numberofdays"]?>;
			var cost = 0;
			var imageDirectory = "";
			if (carName == "Nissan GT-R"){
				cost = 150 * numberOfDays;
				imageDirectory = "./images/gtr.jpg";
			}
			else if(carName == "Subaru WRX"){
				cost = 100 * numberOfDays;
				imageDirectory = "./images/wrx.jpg";
			}
			else if(carName == "Mitsubishi Outlander"){
				cost = 80 * numberOfDays;
				imageDirectory = "./images/outlander.jpg";
			}
			else if(carName == "Audi A4"){ 
				cost = 90 * numberOfDays;
				imageDirectory = "./images/a4.jpg";
			}
			else if(carName == "Volkswagen Golf"){ 
				cost = 60 * numberOfDays;
				imageDirectory = "./images/golf.jpg";
			}
			else if(carName == "Mercedes A class"){ 
				cost = 70 * numberOfDays;
				imageDirectory = "./images/a class.jpg";
			}
			document.getElementById("cost").innerHTML = cost.toString();
			document.getElementById("carImage").src = imageDirectory;
		</script>
		
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "CarHire";
			$firstName = $_POST["Name"];
			$surName = $_POST["Surname"];
			$carSelect = $_POST["carSelect"];
			$dateHired = $_POST["Datefrom"];
			$daysHired = $_POST["Numberofdays"];
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
			$sql = "INSERT INTO `clients`(`Car they hired`, `Created`, `First name`, `Surname`, `Date hired`, `Days hired`) 
					VALUES ('$carSelect','2017-02-01','$firstName','$surName','$dateHired','$daysHired')";

			if (mysqli_query($conn, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		?>
		<br>
		<p>Made by Sid</p>
</body>
</html>