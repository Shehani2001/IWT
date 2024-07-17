<?php
include "config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $passportN = isset($_POST['passportN']) ? $_POST['passportN'] : '';
    $mobileNumber = isset($_POST['4N']) ? $_POST['4N'] : '';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password != $cpassword) {
        echo "Passwords do not match. Please try again.";
        exit();
    }

    $image = $_FILES['image'];
    $imageTmpName = $image['tmp_name'];

    if ($imageTmpName) {
        $imageData = file_get_contents($imageTmpName);
        $imageData = mysqli_real_escape_string($conn, $imageData);

        $insert = mysqli_query($conn, "INSERT INTO user_details (user_name, password, email, mobile_number, passport_number, profile_pic) VALUES ('$name', '$password', '$email', '$mobileNumber', '$passportN', '$imageData')");

        if ($insert) {
            mysqli_close($conn);
            echo "<script>alert('Registration successful!'); window.location.href='Login.php';</script>";
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "No file uploaded.";
    }
    mysqli_close($conn);
}
?>
