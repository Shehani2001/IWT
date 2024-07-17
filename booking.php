<?php

	require 'config.php';
	
	if(isset($_POST["subButton"])){
		
		$from = $_POST['from'];
		$from_airport = $_POST['from_airport'];
		$to = $_POST['to'];
		$to_airport = $_POST['to_airport'];
		$trip_type = $_POST['trip'];
		$departure_date = $_POST['depart'];
		$return_date = $_POST['return'];
		$class_type = $_POST['class'];
		$number_of_adults = $_POST['adult'];
		$number_of_children = $_POST['child'];
		
		$booking_id = uniqid(); // Generate a unique ID using the uniqid() function
		
		$sql="INSERT INTO booking (Booking_id, D_from, D_airport, A_to, A_airport, trip, Depart_d, Return_d, class, Adult, Children)
               VALUES ('$booking_id', '$from', '$from_airport', '$to', '$to_airport', '$trip_type', '$departure_date', '$return_date', '$class_type', '$number_of_adults', '$number_of_children')";
			   
			   if (mysqli_query($conn, $sql)) {
					  echo "<script> alert('Booking successfully') </script> ";
					} 
					else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

	}
	
	mysqli_close($conn);
?>