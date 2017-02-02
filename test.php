<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CarHire";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql = "INSERT INTO `clients`(`Car they hired`, `Created`, `First name`, `Surname`, `Date hired`, `Days hired`) 
		VALUES ('Audi A4','2017-02-01','Vladimir','Putin','2017-03-01',21)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
