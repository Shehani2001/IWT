<?php

	require 'config.php';
	
	if(isset($_POST["button1"])){
		
		$id = $_POST['bookingId'];
		
		// sql to delete a record
		$query = "DELETE FROM booking WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record deleted successfully') </script>";
		} else {
		  echo "Error deleting record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button2"])){
		
		$id = $_POST['bookingId'];
		$from = $_POST['from'];
		
		// sql to update a record
		$query = "UPDATE booking SET D_from = '$from' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button2"])){
		
		$id = $_POST['bookingId'];
		$from = $_POST['from'];
		
		// sql to update a record
		$query = "UPDATE booking SET D_from = '$from' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button3"])){
		
		$id = $_POST['bookingId'];
		$from_airport = $_POST['from_airport'];
		
		// sql to update a record
		$query = "UPDATE booking SET D_airport = '$from_airport' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button4"])){
		
		$id = $_POST['bookingId'];
		$to = $_POST['to'];
		
		// sql to update a record
		$query = "UPDATE booking SET A_to = '$to' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button5"])){
		
		$id = $_POST['bookingId'];
		$to_airport = $_POST['to_airport'];
		
		// sql to update a record
		$query = "UPDATE booking SET A_airport = 'to_airport' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button6"])){
		
		$id = $_POST['bookingId'];
		$trip_type = $_POST['trip'];
		
		// sql to update a record
		$query = "UPDATE booking SET Trip = '$trip_type' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button7"])){
		
		$id = $_POST['bookingId'];
		$departure_date = $_POST['depart'];
		
		// sql to update a record
		$query = "UPDATE booking SET Depart_d = '$departure_date' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button8"])){
		
		$id = $_POST['bookingId'];
		$return_date = $_POST['return'];
		
		// sql to update a record
		$query = "UPDATE booking SET Return_d = '$return_date' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button9"])){
		
		$id = $_POST['bookingId'];
		$class_type = $_POST['class'];
		
		// sql to update a record
		$query = "UPDATE booking SET Class = '$class_type' WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button10"])){
		
		$id = $_POST['bookingId'];
		$number_of_adults = $_POST['adult'];
		
		// sql to update a record
		$query = "UPDATE booking SET Adult = $number_of_adults WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	if(isset($_POST["button11"])){
		
		$id = $_POST['bookingId'];
		$number_of_children = $_POST['child'];
		
		// sql to update a record
		$query = "UPDATE booking SET Children = $number_of_children WHERE Booking_id ='$id' ";
		
		if (mysqli_query($conn, $query)) {
		  echo "<script> alert('Record Update successfully') </script>";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

	}
	
	mysqli_close($conn);
?>