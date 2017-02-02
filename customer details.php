<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./customer details.css">
	</head>
	<body>
	<h1>Information about our previous customers</h1>
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
		<p>Here is all the information about the previous customer you searched up.</p>
	<table>
		<tr>
			<th>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "CarHire";
			$firstName = $_POST["Name"];
			$surName = $_POST["Surname"];
			$id = $_POST["ID"];
			$sql = '';
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			if($id == '') 	$sql = "Select * FROM `clients` Where `First name` LIKE '%$firstName%' AND `Surname` LIKE '%$surName%'";
			else 			$sql = "Select * FROM `clients` Where `First name` LIKE '%$firstName%' AND `Surname` LIKE '%$surName%' AND ID = $id";

			if ($result = mysqli_query($conn, $sql)) {
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			if (mysqli_num_rows($result) == 0) echo "There are no results";
			
			while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
				echo "
					<table border='1'>
						<tr>
							<th>
								<p>ID</p>
							</th>
							<th>
								" . $row['ID'] . "
							</th>
						</tr>
						<tr>
							<th>
								<p>Name</p>
							</th>
							<th>
								" . $row['First name'] . "
							</th>
						</tr>
						<tr>
							<th>
								<p>Surname</p>
							</th>
							<th>
								" . $row['Surname'] . "
							</th>
						</tr>
						<tr>
							<th>
								<p>Date from</p>
							</th>
							<th>
								" . $row['Date hired'] . "
							</th>
						</tr>
						<tr>
							<th>
								<p>Number of days</p>
							</th>
							<th>
								" . $row['Days hired'] . "
							</th>
						</tr>
						<tr>
							<th>
								<p>Car they hired</p>
							</th>
							<th>
								" . $row['Car they hired'] . "
							</th>
						</tr>
					</table>
				";
			}
			
			mysqli_close($conn);
		?>
				</th>
			<th style="vertical-align: top;">
				<img src="images/new car.gif" onmouseover="this.src='images/car gif.gif'" onmouseout="this.src='images/new car.gif'"/img>
			</th>
			</tr>
		</table>
	</body>
</html>