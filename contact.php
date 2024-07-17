<?php
include "config.php";

if(isset($_POST["submit"])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_details (first_name, last_name, country, message) VALUES ('$first_name', '$last_name', '$country', '$message')";

    if(mysqli_query($conn, $sql)) 
    {
        echo "Success";
        header("locatoin:  home.php ");
    } 
    else
     {
        echo "Failed: " . mysqli_error($conn);
    }
} else {
    echo "Failed: Form submission failed.";
}
?>
