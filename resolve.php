<?php
include('complaintlist.php');
?>
<?php
if (!empty($_POST["subject"]) || !empty($_POST["resolution"])){ //function works if fields are not empty
doResolve(); //function to start
}

$_SESSION['complaintid'] = $_REQUEST['id']; //retrieve the id from what row was approve selected

function doResolve(){ //start of register function
$rSubject = $_POST['subject']; //variable for taken username
$rResolution = $_POST['resolution']; //variable for taken password
$radminid = $_SESSION['loginid'];
$id = $_SESSION['complaintid'];

//insert into resolve database the details for citizen to view
$db_name = "id20240982_deliverydb";
$db_username = "id20240982_root";
$db_pass = "1CvH@Re<xZdVqACG";
$db_host = "localhost";
$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error()); //Connect to server


$query = "SELECT * from complaint"; 
$result = mysqli_query($con, $query) or die ( mysqli_error()); 
$row = mysqli_fetch_assoc($result);

//get user_id of user that sent the complaint form
while($row = mysqli_fetch_array($result)){
$table_rcomplaintid = $row['complaint_id']; 
$table_ruserid = $row['user_id']; 

if($table_rcomplaintid == $id){
$ruserid = $table_ruserid;
$_SESSION['newuserid'] = $ruserid;
}
}
//end of getting user_id

//set complaint status to approved
$update = "update complaint set status = '". "Resolved" ."' where complaint_id = '".$id."'"; 
mysqli_query($con, $update) or die(mysqli_error());
// end of setting complaint status

//get user_id of admin that sent the resolution form

$db_name2 = "id20240982_deliverydb";
$db_username2 = "id20240982_root";
$db_pass2 = "1CvH@Re<xZdVqACG";
$db_host2 = "localhost";
$con2 = mysqli_connect("$db_host2","$db_username2","$db_pass2", "$db_name2") or die(mysqli_error()); //Connecttoserver
$queryuser = "SELECT * from user"; 
$resultuser = mysqli_query($con2, $queryuser) or die ( mysqli_error()); 
$rowuser = mysqli_fetch_assoc($resultuser);

while($rowuser = mysqli_fetch_array($resultuser)){
$table_uloginid = $rowuser['login_id']; 
$table_uuserid = $rowuser['user_id']; 
if($table_uloginid == $radminid){
$newloginId = $table_uuserid;

}
}

$newuserid = $_SESSION['newuserid'];
//insert into resolve database regarding details of resolution
mysqli_query($con2, "INSERT INTO resolve (subject, resolution, user_id, admin_id, complaint_id) VALUES('$rSubject', '$rResolution', '$newuserid', '$newloginId', '$id')"); //inserts the value to table complaint
//end of getting admin's user_id;

Print '<script>alert("Resolution has been sent!");</script>'; //prompts the user if successful
header("location: complaintlist.php"); // redirects the user to the complaintlist page

}//end of register function
?>
<html>
    <head>
        <title>Resolve Complaint</title>
    </head>

    <style>
		.footer1{
			display:none;
		}
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body{
        background: #00685d;
        }

        .wrapper{
        max-width: 750px;
        width: 100%;
        background: #fff;
        margin: 50px auto;
        box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
        padding: 30px;
        }

        .wrapper .title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #00685d;
        text-transform: uppercase;
        text-align: center;
        }

        .wrapper .form{
        width: 100%;
        }

        .wrapper .form .inputfield{
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        }

        .wrapper .form .inputfield label{
        width: 200px;
        color: #757575;
        margin-right: 10px;
        font-size: 14px;
        }


        /* text area and subject area */
        .wrapper .form .inputfield .input,
        .wrapper .form .inputfield .textarea{
        width: 100%;
        outline: none;
        border: 1px solid #d5dbd9;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 3px;
        transition: all 0.3s ease;
        }

        /* text area only */
        .wrapper .form .inputfield .textarea{
        width: 100%;
        height: 425px;
        resize: none;
        }

        /* complaint type size & position */
        .wrapper .form .inputfield .custom_select{
        position: relative;
        width: 100%;
        height: 37px;
        }

        /* select */
        .wrapper .form .inputfield .custom_select select{
        -webkit-appearance: none;
        -moz-appearance:   none;
        appearance:        none;
        outline: none;
        width: 100%;
        height: 100%;
        border: 0px;
        padding: 8px 10px;
        font-size: 15px;
        border: 1px solid #d5dbd9;
        border-radius: 3px;
        }

        /* button designs */
        .wrapper .form .inputfield .btn{
        width: 100%;
        padding: 8px 10px;
        font-size: 15px; 
        border: 0px;
        background:  #FFC900;
        color: #fff;
        cursor: pointer;
        border-radius: 3px;
        outline: none;
        }

        .wrapper .form .inputfield .btn:hover{
        background: #ffd658;
        }
    </style>

    <body>
        <!-- RESOLUTION FORM -->
        <form action = "resolve.php" id = "resolve" method="POST"> <!-- START OF FORM -->
            <div class="wrapper w3-content">
                <div class="title">
                    Resolution Form
                </div>
                <div class="form">
                    <div class="inputfield">
                        <label>Enter Subject</label>
                        <input type="text" class="input" name="subject" required="required" placeholder="Subject">
                    </div>  
            
                    <div class="inputfield">
                        <label>Enter Resolution</label>
                        <textarea class="textarea" name="resolution" form="resolve"></textarea>
                    </div> 
            
                    <div class="inputfield">
                        <input type="submit" name="rSubmit" value="Submit" class="btn"> <!-- REGISTER BUTTON -->
                    </div>
                </div>
            </div>
        </form> <!-- END OF FORM -->
        
<footer class="w3-container text-center w3-theme-d5">
	<br />
	<table style="margin-left: 8%; width:110%; border:none;">
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