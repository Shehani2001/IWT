<?php
include 'config.php';

if (isset($_POST['update_profile'])) {
    $username = $_POST['update_name'];
    $mobileNumber = $_POST['update_mobile_number'];
    $email = $_POST['update_email'];
    $oldPassword = $_POST['old_pass'];
    $newPassword = $_POST['new_pass'];
    $confirmPassword = $_POST['confirm_pass'];

    // Check if the new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        echo "New password and confirm password do not match.";
        exit();
    }
    // Update the user profile
    $updateQuery = "UPDATE user_details SET user_name='$username', password='$newPassword', email='$email', mobile_number='$mobileNumber' WHERE password='$oldPassword'";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        echo "Profile updated successfully.";
        
        exit();
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
        exit();
    }
}
?>