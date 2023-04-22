<?php error_reporting(E_ERROR | E_PARSE);
session_start(); //starts the session
if($_SESSION['loginid'] != ""){ //checks if user is logged in
$loginId = $_SESSION['loginid'];
$status = "yes";
}

else{
$status = "no";
}

?>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<title> About Page</title>
<center>
<br><br><br>
<h2><b>Meet our Council</b></h2>
</center>
</head>

<body>
<?php error_reporting(E_ERROR | E_PARSE);
session_start(); //start the session
//database details
$db_name = "id20240982_deliverydb"; //DATABASE NAME FOR THE PROJECT
$db_username = "id20240982_root";
$db_pass = "1CvH@Re<xZdVqACG";
$db_host = "localhost";
$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server
$query = "SELECT * from user WHERE login_id = '$loginId'"; //select matching login_id from user table 
$results = mysqli_query($con, $query); //Query the user table
$exists = mysqli_num_rows($results); //Checks if login_id exists

if($exists != ""){ //if there are no returning rows or no existing username
while($row = mysqli_fetch_assoc($results)){ //display all rows from query
$table_acctype = $row['account_type']; // the first id row is passed on to $table_users, and so on until the query is finished
}

if(($table_acctype == "Admin")){ //verify is the account type is admin from USER
$user = "Admin"; //if admin set to $user to admin
}

else{ //verify is the account type is citizen from USER
$user = "Citizen"; //if admin set to $user to citizen
}

}

?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
<?php 
if ($status == "yes"){ //if there is a user logged in
	
if ($user == "Admin"){ //if the user is an admin
  echo "<a href='index.php' class='w3-bar-item w3-button'>" . "<i class='fa fa-home w3-margin-right'>" . "</i>" . "News" . "</a>";
  echo "<a href='complaintlist.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Forms" . "</a>";
  echo "<a href='about.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal w3-white'>" . "About" . "</a>";
  echo "<a href='contact.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Contact". "</a>";
  echo "<a href='logout.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Logout" . "</a>";
  echo "<a href='user.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Profile" . "</a>";
  echo "<a href='admin.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "User Approval" . "</a>";

  
  //<!-- Navbar on small screens -->
   echo "<div id='navDemo' class='w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium'>";
   echo "<a href='index.php' class='w3-bar-item w3-button w3-darkgreen'>" . "News" . "</a>";
   echo "<a href='complaintlist.php' class='w3-bar-item w3-button'>" . "Forms" . "</a>";
   echo "<a href='about.php' class='w3-bar-item w3-button'>" . "About" . "</a>";
   echo "<a href='user.php' class='w3-bar-item w3-button'>" . "Contact" . "</a>";
   echo "<a href='admin.php' class='w3-bar-item w3-button'>" . "Profile" . "</a>";
   
} //end of "if the user is an admin"

else { //if the user is a citizen
  echo "<a href='index.php' class='w3-bar-item w3-button'>" . "<i class='fa fa-home w3-margin-right'>" . "</i>" . "News" . "</a>";
  echo "<a href='complaintform.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Forms" . "</a>";
  echo "<a href='about.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal w3-white'>" . "About" . "</a>";
  echo "<a href='contact.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Contact". "</a>";
  echo "<a href='logout.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Logout" . "</a>";
  echo "<a href='user.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Profile" . "</a>";

  
  //<!-- Navbar on small screens -->
   echo "<div id='navDemo' class='w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium'>";
   echo "<a href='index.php' class='w3-bar-item w3-button w3-darkgreen'>" . "News" . "</a>";
   echo "<a href='complaintform.php' class='w3-bar-item w3-button'>" . "Forms" . "</a>";
   echo "<a href='about.php' class='w3-bar-item w3-button'>" . "About" . "</a>";
   echo "<a href='contact.php' class='w3-bar-item w3-button'>" . "Contact" . "</a>";
   echo "<a href='user.php' class='w3-bar-item w3-button'>" . "Profile" . "</a>";
	
} //end of "if the user is a citizen"

} //end of "if there is a user logged in"

?>

<?php 
if ($status == "no"){ //if there is no user logged in
  echo "<a href='index.php' class='w3-bar-item w3-button'>" . "<i class='fa fa-home w3-margin-right'>" . "</i>" . "News" . "</a>";
  echo "<a href='about.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal w3-white'>" . "About" . "</a>";
  echo "<a href='contact.php' class='w3-bar-item w3-button w3-hide-small w3-hover-teal'>" . "Contact". "</a>";
  echo "<a href='register.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Register" . "</a>";
  echo "<a href='login.php' class='w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal' title='Search'>" . "Login" . "</a>";

  //<!-- Navbar on small screens -->
   echo "<div id='navDemo' class='w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium'>";
   echo "<a href='index.php' class='w3-bar-item w3-button w3-darkgreen'>" . "News" . "</a>";
   echo "<a href='about.php' class='w3-bar-item w3-button'>" . "About" . "</a>";
   echo "<a href='contact.php' class='w3-bar-item w3-button'>" . "Contact" . "</a>";
   echo "<a href='user.php' class='w3-bar-item w3-button'>" . "Profile" . "</a>";
   
} 
else{}//end of "if there is no user logged in"

?>
</div>
</div>
</div>



  <center>
 <div class="content" style= "border:3px solid gray; width: 50%;"> <br />    
	  <img src="kap_plecy.png" alt="Cap" width="100" height="100">
	
 <h3><b>Simplicio Hermogenes</b></h3>
  
  <p><b>Barangay Captain </b><br /> Committee on Solid Waste Management  and Committee on Environment and Infrastruct</p>
  
  </div>
  </center>
  <br />

<center>
<div class= "row">
 <div class="content" style= "border:3px solid gray; width: 28%; float: left; margin-left: 5%; margin-right:2%; "> <br />    
	  <img src="kgd_gemma.png" alt="KGD Gemma" width="100" height="100">
	
 <h3><b>Gemma G. Estrella</b></h3>
  
  <p style="margin-top: -3%"><b>Kagawad </b><br /> Committee on Appropriation, Bids and Awards 
							</br> Committee on Socio/Cultural Development 
							</br> GAD Focal Person</p>  
  </div>
  
 <div class="content" style= "border:3px solid gray; width: 30%; float: left; margin-right:2%; "> <br />    
	  <img src="kgd_nick.png" alt="KGD Nick" width="100" height="100">
	
 <h3><b>Niklaus V. De Leon</b></h3>
  
  <p><b>Kagawad</b><br /> Committee on Barangay Council for the Protection of Children</p>
  
  </div>
  
 <div class="content" style= "border:3px solid gray; width: 26%; float: left; "> <br />    
	  <img src="kgd_joey.png" alt="KGD Joey" width="100" height="100">
	
 <h3><b>Eduardo E. Fragada</b></h3>
  
  <p><b>Kagawad</b><br />Committee on Peace and Order </br> Committee on Disaster Preparedness</p>
  
  </div>
  </center>
  <br />
  </div>  
    
  <center>
  <div class= "row">
 <div class="content" style= "border:3px solid gray; width: 28%; float: left; margin-left: 5%; margin-right:2%;"> <br />    
	  <img src="kgd_pilar.png" alt="KGD Pilar" width="100" height="100">
	
 <h3><b>Pilar F. Perez</b></h3>
  
  <p><b>Kagawad</b><br />Committee on Finance and Revenue Generation</p>
  
  </div>
    
 <div class="content" style= "border:3px solid gray; width: 30%; float: left; margin-right:2%;"> <br />    
	 <img src="kgd_sab.png" alt="KGD Sab" width="100" height="100">
	
 <h3><b>Sabrina E. Kintanar</b></h3>
  
  <p><b>Kagawad</b><br />Committee on Philam Development and Beautification</p>
  
  </div>
    
 <div class="content" style= "border:3px solid gray; width: 26%; float: left; "> <br />    
	 <img src="kgd_ryan.png" alt="KGD Ryan" width="100" height="100">
	
 <h3><b>Ryan Rouel P. Fernandez</b></h3>
  
  <p><b>Kagawad</b><br />Committee on Livelihood, Senior, and PWD</p>
  
  </div>
  </center>
  <br />
  
   <center>
  <div class= "row">
 <div class="content" style= "border:3px solid gray; width: 30%; "> <br />    
	 <img src="kgd_james.png" alt="KGD James" width="100" height="100">
	
 <h3><b>James G. Beloy</b></h3>
  
  <p><b>Kagawad</b><br />Committee on Health and Sanitation </br> Committee on Animal Welfare</p>
  
  </div>
  </center>
  <br />
  <center>
  <hr style="background-color: #014a43; height: 5%">
  <h3><b>Council Members</b></h3>
  </center>

<center>
  <div class= "row">
 <div class="content" style= "border:3px solid gray; width: 28%; float: left; margin-left: 5%; margin-right:2%;"> <br />    
	  <img src="sk_peter.png" alt="SK Peter" width="100" height="100">
	
 <h3 style="margin-top: -4.5%"><b>Peter K. Arceo</b></h3>
  
  <p style="margin-top: -3%"><b>SK Chairman</b><br />Committee on Youth and Sports Development </br> Task Force Youth</p>
  
  </div>
  
<div class="content" style= "border:3px solid gray; width: 30%; float: left; margin-right:2%;"> <br />    
	 <img src="sec_anjee.png" alt="Secretary Angelita" width="100" height="100">
	
 <h3><b>Angelita H. Caberte</b></h3>
  
  <p><b>Barangay Secretary</b><br /></p>
  
  </div> 
  

  <div class="content" style= "border:3px solid gray; width: 26%; float: left;"> <br />
	 <img src="treas_sulit.png" alt="Treasurer Sulit" width="100" height="100">
	
 <h3><b>Aurelia B. Sulit</b></h3>
  
  <p><b>Barangay Treasurer</b><br /></p>
  
  </div>
  <br />
 </div>
 </center>
  <br />
  
  <center>
  <div class= "row">
<div class="content" style= "border:3px solid gray; width: 28%; float: left; margin-left: 5%; margin-right:2%;"> <br />  
     
	 <img src="Estela.png" alt="Estela" width="100" height="100">
	
 <h3><b>Estela S. Salcedo</b></h3>
  
  <p><b>Admin Assistant</b><br /></p>
  
  </div>
  
  <div class="content" style= "border:3px solid gray; width: 30%; float: left; margin-right:2%;"> <br />    
	 <img src="EDWIN 1.png" alt="Josh" width="100" height="100">
	
 <h3><b>Edwin D. Jatico</b></h3>
  
  <p><b>Revenue Collection Clerk</b><br /></p>
  
  </div> 
  
  <div class="content" style= "border:3px solid gray; width: 26%; float: left; "> <br />    
	 <img src="josh2x2.png" alt="Josh" width="100" height="100">
	
 <h3><b>Joshua A. Silapan</b></h3>
  
  <p><b>Accounting Clerk</b><br /></p>
  
  </div>
  <br />
  </div>
  </center>
  <br />
  
  <center>
  <div class= "row">
 <div class="content" style= "border:3px solid gray; width: 30%; "> <br />   
	 <img src="Banol.png" alt="Marcelina" width="100" height="100">
	
 <h3><b>Ma. Marcelina F. Banol</b></h3>
  
  <p><b>Barangay Clerk</b><br /></p>
  
  </div>
  <br />
  </center>



<!-- Container for the image gallery -->
<center>
<hr style="background-color: #014a43; height: 5%">
<h2><b>Services Offered</b></h2>
<div class="w3-container">

  <!-- Full-width images with number text -->
  <div class="mySlides w3-container">
    <div class="numbertext">1 / 6</div>
      <img src="Backyard.png" style="width:30%">
  </div>

  <div class="mySlides w3-container">
    <div class="numbertext">2 / 6</div>
      <img src="Boat.png" style="width:30%">
  </div>

  <div class="mySlides w3-container">
    <div class="numbertext">3 / 6</div>
      <img src="Ambulance.png" style="width:30%">
  </div>

  <div class="mySlides w3-container">
    <div class="numbertext">4 / 6</div>
      <img src="ZeroW.png" style="width:30%">
  </div>

  <div class="mySlides w3-container">
    <div class="numbertext">5 / 6</div>
      <img src="Pets.png" style="width:30%">
  </div>

  <div class="mySlides w3-container">
    <div class="numbertext">6 / 6</div>
      <img src="FT.png" style="width:30%">
  </div>
</center>


  <!-- Next and previous buttons -->


  <!-- Image text -->
  <div class="caption-container w3-container">
    <p id="caption"></p>
  </div>
<br><br><center>
  <!-- Thumbnail images -->
  <div class="row w3-container w3-content">
    <div class="column">
      <img class="demo cursor" src="Backyard.png" style="width:30%" onclick="currentSlide(1)" alt="
The Barangay offers residents backyard cleaning services like lawn mowing, bush trimming, and tree cutting. A resident may inquire to the barangay office to request for this service and the barangay shall send the servicemen assigned.
">
<h5>Backyard Cleaning</h5>
    </div>
    <div class="column">
      <img class="demo cursor" src="Boat.png" style="width:30%" onclick="currentSlide(2)" alt="During storms, there is a chance that flooding will happen and if ever a resident needs help in evacuating from the flood, the barangay offers this service where they can provide life vests and may use a rescue boat.
	  Once they know the situation, service men will rush towards the flood and provide aid to the affected residents." class="w3-center">
	  
<h5>Rescue Boat</h5>
    </div>
	
    <div class="column ">
      <img class="demo cursor" src="Ambulance.png" style="width:30%" onclick="currentSlide(3)" alt="The Ambulance service is provided when there is an emergency and the patient requires immediate hospital treatment. One simply needs to call the barangay about the situation and they will assist you in delivering the patient to the nearest hospital. 
	  They will keep assisting you until the patient has been admitted.">
<h5>Ambulance</h5>
    </div>
	
    <div class="column">
      <img class="demo cursor" src="ZeroW.png" style="width:30%" onclick="currentSlide(4)" alt="The zero waste project is having all biodegradable waste being converted into fertilizer which is used in the barangay garden that grows different vegetables.
	  The residents simply need to deliver their waste in the mill located at the center of the village.">
<h5>Zero Waste Project</h5>
    </div>
	
    <div class="column ">
      <img class="demo cursor" src="Pets.png" style="width:30%" onclick="currentSlide(5)" alt="When your dog is lost somewhere within the village, one can contact the barangay and ask for help in finding your pet. 
	  One will need to provide information about the pet, and one may even provide posters which they will assist you on.">
<h5>Finding Pets</h5>
    </div>
	
    <div class="column">
      <img class="demo cursor" src="FT.png" style="width:30%" onclick="currentSlide(6)" alt="The Barangay offers emergency fire response services that are intended to provide quick response to any fire incidents. 
	  Response vehicles are sent as soon as the fire station is alerted or notified of any ongoing emergencies.">
<h5>Fire Response</h5>
    </div>
  </div>
  <br><br><br>
  </center>
  
  
  <footer class="w3-container text-center w3-theme-d5">
	
	<br />
	<table style="margin-left: 8%; width:110%">
	  <tr>
      <td>
	  <ul class="navbar-nav" style="text-align: left; margin-left: 8%; line-height: 200%; list-style-type: none"><b>
      <li>
        <a href="index.php" style="color: white; text-align: left;">News</a>
      </li>
      <li>
        <a href="about.php" style="color: white; text-align: left">About</a>
      </li>
	  <li>
        <a href="contact.php" style="color: white; text-align: left">Contact</a>
      </li>
	  <li><br />
	  <img src="social.png" alt="social" style="width: 10%; margin-top: -5%" usemap="#social">
		<map name="social">
			<area shape="rect" coords="0,0,80,95" href="https://www.facebook.com/barangayphilamcouncil/">
		</map>
	  </li>
	  </ul>
      </td>
	<td><center>
	<p style="color:white"><b>Contact Us</b></p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7720.234429299242!2d121.02915277908323!3d14.649287056083418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6fddadd19cd%3A0xcc45e2dc61dce4ef!2sPhil-Am%2C%20Quezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1675332211613!5m2!1sen!2sph" 
	        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></b>
				
		
		</center>
		
	</td>
    </tr>
		</table>
	
	<br />
	  <div class="container">
        <div class="row">
          <div class="col-12"><center>
            <p style="color: white">Copyright © 2023 Barangay Philam. Created by: Group Indonesia - Mapua University Makati. All Rights Reserved.</p>
          </center></div>
        </div>
      </div>
	  
	  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
    </footer>


</body>
</html>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<style>
* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
 
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.iframe[
float: left;
}

.content
	  {	
	   font-family:helvetica;	   
	   width: 90%;
       padding: 10px;
       border: 5px solid black;
       margin-left: auto;
	   margin-right: auto;
       margin-top:auto;
	  }
	 
</style>