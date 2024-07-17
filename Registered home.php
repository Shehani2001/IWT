
<html>
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Home
	</title>
	
	
</head>


<body >
<script>
        // Display an alert message 
        window.onload = function() {
            alert("Logged in successfully!");
        };
    </script>



<link rel="stylesheet" href="new2.css"> 	

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

          <li><a href="newsweb.html">News</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="Search flight.php">Search Flight</a></li>
        </ul>
        
        
      </nav>
    </div>
	
  <div class="body-text"> 

    
  <?php
include "config.php";
session_start();
$uname = $_SESSION['user_name'];

//retrieve the image 
$query = "SELECT profile_pic FROM user_details WHERE user_name = $uname"; 
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $imageData = $row['profile_pic'];

        $base64Image = base64_encode($imageData);

        // Display the image using an <img> tag
        ?>

        <div style=" margin: -3% 0 10% 0%;">
            <?php
        echo "<img src='data:image/jpeg;base64, $base64Image'  alt='Profile_Pic' height='150px' width= '150px' style='border-radius: 91px;' >";
        echo "<h3>Welcome back $uname</h3>";
        ?>
        </div>
        <?php
    }


} else {
    echo "Error retrieving image: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
  <div><img src="img/logo.png"  alt="logo img" height=15% width=8% style="margin: -28% 71% 0% 0%; border-radius: 39px; border-style: solid; "></div>
  <div style="margin: -25% 20px 0% 85%;">
       <button type= "button" onclick="location.href='logout.php'" class="button2 button4" style="margin: 0 0 0 -88px;" > Logout </button>
			 <button type= "button" onclick="location.href='updateprofile1.php'" class="button2 button4" > Edit account </button>
		</div> 
		
    <h1 style="margin-top: 284px;">WELCOME TO BLUE HORIZON AIR-LINE</h1>
    <h2>JUNE 2023</h2>
    <p style="color: yellow;">Best way to fly</p>
	


<br><br><br>


<video width="820" height="540" controls>
<source src="intro.mp4" type="video/mp4">
</video>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- Footer -->
<div class= "footercontainer">

<div>
	<table>
			<tr>
      <tr>
				<th><a  href="about us.html"> About Us</a></th> 
				<th><a  href="contact.html"> Contact Us</a></th>
				<th><a  href="New policy.html"> Privacy and policy</a></th>
				<th><a  href="faq.html"> FAQ</a></th>
				<th></th>
				<th></th>
        <th></th>
        <th></th>
       
				
				
		        <td colspan="2">Certificated By  <img src="img/certi1.png" alt = "Certificate" width="50" height= "50"></td>
			
			</tr>
	<tr>
	<td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
	</tr>
	
	<tr>
	<td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
	</tr>
	<tr>
	<td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
	</tr>
	<td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td><h5>Blue Horzon Airways. All rights reserved </h5></td><td></td>
	</tr>


	</table>
	</div>


</div>
	



  </div>
  
</div>





</body>
</html>