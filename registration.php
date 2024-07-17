<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/reg & log.css">
   <link rel="stylesheet" href="new2.css">


</head>
<body>
  <!--header-->
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
    
     
         
            <li><a href="home.php">Home</a>
           
           </li>
           <li><a href="about us.html">About Us</a></li>
           <li><a href="Login.html">Book flight</a></li>
         </ul>
          <ul class="menu-links">
 
           <li><a href="newsweb.html">News</a></li>
           <li><a href="contact.html">Contact Us</a></li>
           <li><a href="Search flight.php">Search Flight</a></li>
         </ul>
            
          </nav>
        </div>
        <!--header-->
       
<div class="form-container">

   <form action="register3.php" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter name" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>

      <input type="text" name="4n" placeholder="enter mobile number" class="box" required>
      <input type="text" name="pnumber" placeholder="enter passport number" class="box" required>

      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <p>set profile picture</p>
      <input type="file" name="image" class="box" >
      <input type="submit" name="submit" value="register now" class="btn">
      <p>or sign-up with</p>
      <img src="img/google-logo-png-google-icon-logo-png-transparent-svg-vector-bie-supply-14.png" alt="google" width="28px" height="28px">
      <img src="img/Capture.JPG" alt="facebook " width="30px" height="30px">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>
<!--Footer -->
<div class= "footercontainer">

  <div>
    <table>
        <tr>
        <th><a  href="##"> About Us</a></th> 
				<th ><a  href="contact.html"> Contact Us</a></th>
				<th><a  href="New policy.html"> Privacy and policy</a></th>
				<th><a  href="faq.html"> FAQ</a></th>
				<th ></th>
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
    
  
  

</body>
</html>