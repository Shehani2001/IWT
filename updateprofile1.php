<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>
 

</head>
<body>

   <!--header-->
</head>
<body style="background-image: url('images/img3.jpg');">


   <link rel="stylesheet" href="new4.css">
   <div class="menu-container">
  
      <input type="checkbox" id="openmenu" class="hamburger-checkbox">
      
     <div class="hamburger-icon">
        <label for="openmenu" id="hamburger-label">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </label>    
      </div>
    
        <div class="menu-pane">
        
          <nav>
            <ul class="menu-links">
    
     
              
            <li><a href="Registered home.php">Home</a>
           
           </li>
           <li><a href="about us.html">About Us</a></li>
           <li><a href="booking.html">Bookings</a></li>
         </ul>
          <ul class="menu-links">
 
           <li><a href="###">News</a></li>
           <li><a href="contact.html">Contact Us</a></li>
           <li><a href="Search flight.php">Search Flight</a></li>
         </ul>
            
            
          </nav>
        </div>
        <button style="margin: 3% -20% 0% 87%" onclick="location.href='Edit booking.html'" class="bookingbtn">Edit Bookings</button>
   
<div class="update-profile" >

  
  

   <form action="updateprofile.php" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="" class="box">
            <span>your mobile number</span>
            <input type="text" name="update_mobile_number" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="" class="box">
            
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="home.php" class="delete-btn">go back</a>
   </form>

</div>

<!--Footer -->
<div class= "footercontainer">

   <div>
     <table>
         <tr>
         <th><a  href="about us.html"> About Us</a></th> 
				<th ><a  href="contact.html"> Contact Us</a></th>
				<th><a  href="New policy.html"> Privacy and policy</a></th>
				<th><a  href="faq.html"> FAQ</a></th>
				<th ></th>
				<th></th>
        <th></th>
        <th></th>
           
               <td colspan="2">Certificated By  <img src="certi1.png" alt = "Certificate" width="50" height= "50"></td>
         
         </tr>
     <tr>
     <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
     </tr>
     
     <tr>
     <tr>
     <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
     </tr>
     <tr>
     <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
     </tr>
     <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><h5>Blue horizon airline. All rights reserved </h5></td><td></td>
     </tr>
   
   
     </table>
     </div>
   
   
   </div>
     
   

   
   <!--Footer -->

</body>
</html>