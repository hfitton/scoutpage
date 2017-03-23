
<!DOCTYPE HTML>

<!-- you come here from details.php-->

<html>
  <head>
    <title>Update</title>
  <link rel="stylesheet" href="update.css">

  </head>
  <body>

 
<!--link to js script DON'T FORGET TO IMPORT LIBRARY! -->
	<div class='keaheader'>
		<a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a>
	</div>
	
	<div class="container"> <!--open container div to allow creation of grid below.-->

<?php
require_once('config_sql.inc');

$id = $_GET['id']; 

//pull everything from the db
$sql = "SELECT * FROM consentform  WHERE id LIKE ".$id;
$people = $conn->query($sql);

if (mysqli_num_rows($people) > 0) 
	{

		while ($person = $people->fetch_assoc()) 
	{
?>

 	<form action="confirm.php?id=<?=$id;?>" method='post'> 
		
  		<div id='left'> 
			<div style="text-align:center" id='left1'>
  	  <!-- terrible issues with buttons.  Found this solution at:
  http://stackoverflow.com/questions/2906582/how-do-i-create-an-html-button-that-acts-like-a-link  -->
  				<button onclick="location.href='admin.php'" type="button"  class='button' label='search'>Back to 				Search</label></button>
			</div>
        
  <?php    
 //'<input type="text" name="firstname" value="'. htmlentities($person->firstname) .'" maxlength="50" required="required" />';

       echo "<table style='border: none;'>
         <th colspan ='2'>Member's Details</th>
        <tr><td>First name:  </td>
        <td> <input type = 'text' name='firstname' value='" . htmlentities($person['firstname']). "' maxlength='50' required='required' /> </td></tr>
        <tr><td>Surname: </td>
        <td> <input type = 'text' name='surname' value='" . htmlentities($person['surname']). "' maxlength='50' required='required' /> </td></tr>
         <tr><td>Address:</td>
         <td><input type = 'text' name='address' value='" . htmlentities($person['address']). "' maxlength='100' required='required' /></td></tr>
         <tr><td>Phone</td>
         <td><input type = 'text' name='homePhone' value='" . htmlentities($person['homePhone']). "' maxlength='50' required='required' /></td></tr>
         <tr><td>Mobile No:</td>
         <td><input type = 'text' name='mobile' value='" . htmlentities($person['mobile']). "' maxlength='20' required='required' /></td></tr>
         <tr><td>Email:</td>
         <td><input type = 'text' name='email' value='" . htmlentities($person['email']). "' maxlength='50' required='required' /></td></tr>

         <tr><td>Date of birth:</td>
         <td><input type = 'text' name='dob' value='" . htmlentities($person['dob']). "' maxlength='50' required='required' /></td></tr>

         <tr><td>School yr:</td>
         <td><input type = 'text' name='schoolyr' value='" . htmlentities($person['schoolyr']). "' maxlength='50' required='required' /></td></tr>
         <tr><td>School:</td>
         <td><input type = 'text' name='school' value='" . htmlentities($person['school']). "' maxlength='50' required='required' /></td></tr>
         <tr><td>Ethnicity:</td>
         <td><input type = 'text' name='ethnicity' value='" . htmlentities($person['ethnicity']). "' maxlength='50' required='required' /></td></tr>
         <tr><td>Gender:</td>
         <td><input type = 'text' name='gender' value='" . htmlentities($person['gender']). "' maxlength='50' required='required' /></td></tr>
         <tr><td>Medical notes:</td>
         <td><input type = 'text' name='medical' value='" . htmlentities($person['medical']). "' maxlength='50' required='required' /></td></tr>

         <tr><td>Diet:</td>
         <td><input type = 'text' name='diet' value='" . htmlentities($person['diet']). "' maxlength='50' required='required' /></td></tr>

         <tr><td>Comments:</td>
         <td><input type = 'text' name='comments' value='" . htmlentities($person['comments']). "' maxlength='200' required='required' /></td></tr>
         </table>";
      ?>
	      </div> <!--closes left div -->  

      
      		<div id='middle'>
			<div style="text-align:center" id='middle1'>      	
    			<button onclick="location.href='../home.html'" style="text-align:center"type="button" class ="button" name ='home'>Home</button> 
			</div>
    	
		      
      <?php
        echo"<table>

        <th colspan ='2'>Primary Contact 1</th>

          <tr><td>Contact firstname</td>
          <td><input type = 'text' name='p1firstname' value='" . htmlentities($person['p1firstname']). "' maxlength='200' 			required='required' /></td></tr>
          <tr><td>Contact surname</td>
          <td><input type = 'text' name='p1surname' value='" . htmlentities($person['p1surname']). "' maxlength='200' 			required='required' /	></td></tr>
         <tr><td>Address:</td>
         <td><input type = 'text' name='p1address' value='" . htmlentities($person['p1address']). "' maxlength='200' required='required' /></td></tr>
         <tr><td>Phone</td>
         <td><input type = 'text' name='p1homePhone' value='" . htmlentities($person['p1homePhone']). "' maxlength='200' required='required' /></td></tr>
         <tr><td>Mobile No:</td>
         <td><input type = 'text' name='p1mobile' value='" . htmlentities($person['p1mobile']). "' maxlength='200' required='required' /></td></tr>
         <tr><td>Email:</td>
         <td><input type = 'text' name='p1email' value='" . htmlentities($person['p1email']). "' maxlength='200' required='required' /></td></tr>
         <tr><td>Relationship:</td>
         <td><input type = 'text' name='p1relation' value='" . htmlentities($person['p1relation']). "' maxlength='200' required='required' /></td></tr>
         </table>";
           
           ?>
		</div>  <!--closes middle div -->
        	<div id='right'>
			<div style="text-align:center" id='right1'>
   			<button class="button" style="text-align:center" type='submit' name='save' id='save' value='save'>Save</button>
        	  	</div>
		   <?php
			   echo"<table>

			<th colspan ='2'>Primary Contact 2</th>

			  <tr><td>Contact firstname</td>
			  <td><input type = 'text' name='p2firstname' value='" . htmlentities($person['p2firstname']). "' maxlength='200' 				required='required' /></td></tr>

			  <tr><td>Contact surname</td>
			  <td><input type = 'text' name='p2surname' value='" . htmlentities($person['p2surname']). "' maxlength='200' 				required='required' /></td></tr>

			 <tr><td>Address:</td>
			 <td><input type = 'text' name='p2address' value='" . htmlentities($person['p2address']). "' maxlength='200' 				required='required' /></td></tr>

			 <tr><td>Phone</td>
			 <td><input type = 'text' name='p2homePhone' value='" . htmlentities($person['p2homePhone']). "' maxlength='200' 				required='required' /></td></tr>

			 <tr><td>Mobile No:</td>
			 <td><input type = 'text' name='p2mobile' value='" . htmlentities($person['p2mobile']). "' maxlength='200' 				required='required' /></td></tr>

			 <tr><td>Email:</td>
			 <td><input type = 'text' name='p2email' value='" . htmlentities($person['p2email']). "' maxlength='200' 				required='required' /></td></tr>

			 <tr><td>Relationship:</td>
			 <td><input type = 'text' name='p2relation' value='" . htmlentities($person['p2relation']). "' maxlength='200' 				required='required' /></td></tr>

			 </table>";
		       };
		     };
		    ?>
   
		</div> </form> <!-- closes the right div-->
<?php 

/* this executes the code when the button is clicked. 

if( isset( $_POST['save'])) {

  require_once('config_sql.inc');

/*$data = "UPDATE consentform SET email='helens_new@mail.com' WHERE id='$id'";

$data = "UPDATE consentform 
        SET firstname = '".$conn->real_escape_string($_POST['firstname'])."', 
        surname = '".$conn->real_escape_string($_POST['surname'])."' WHERE id = ".(int)$id."
        LIMIT 1";
};

/*foreach($_POST as $key => $value) {  

else if (isset($_GET['home'])) {
                               echo'<form action="../home.html" method="post">';
}
else if (isset($_GET['search'])) {
                                  echo'<form action="admin.php" method="post">';
};
 
*/
      
?>
	
</div><!--closes container div-->


<div class=footer><img src="../pictures/scoutfooter.png" alt="Adventure Plus Banner" width=100%>
</div> 


