
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Login
	</title>
	
	
</head>


<body >
 

<link rel="stylesheet" href="new2.css"> 	


	
  <div class="body-text">
    <body class="bodylogin">

        <link rel="stylesheet" href="new2.css">
        
       <div class="logtitle"><h1>WELCOME BACK TO BLUE HORIZON!</h1></div> 
            <div class="loginform">
            <form class="modal-content" action="Loginphp.php" method="post">
            <?php if (isset($_GET['error'])) { ?>

                      <p style="color: red; border-style: solid;"><?php echo $_GET['error']; ?></p>

                      <?php } ?> 
               <label for="username"><div class="namepwalign"><b>Enter Username</b></div> </label> 
                <input type="textbox" name="username" placeholder="Username" required><br>
                <div class="namepwalign">  <label for="password"><b>Enter Password </b> </label></div>
                <input type="password" name="password" id="pw" placeholder="Password" required>
                <div style="margin-left: 46%;"><input type="checkbox"  id="showpw"><b>Show</b> <br></div> 
                <a href="forgot pw page.html" style="margin-left: -43%;">Forgotten password ?</a><br><br><br>
                
                <input type="submit" value="Log in" class="buttonlogin" >
            </form>
           <p>Dont have an account?<a href="registration.php" >Sign up now</a></p>
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
          <td><h5>Blue Horizon Airways. All rights reserved </h5></td><td></td>
          </tr>
  
  
    </table>
    </div>
  
  
  </div>
            
  </div>
  <script src="login.js"></script>



	






</body>
</html>