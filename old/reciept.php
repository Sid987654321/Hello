<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
	<h1>Thank you for hiring a car with us</h1>
	<table border="1">
			<tr>
				<th>
					<a href="./index.html">Welcome page</a>
				</th>
				<th>
					<a href="./Form.html">Hire a car</a>
				</th>
			</tr>
		</table>
		<p>You're selected car will be ready on the day you have requested.</p>
		<p>Please come pick up the car you have hire here</p>
		

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>







	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
</html>