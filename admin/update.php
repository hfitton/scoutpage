<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Update</title>
  </head>
  <body>

  <link rel="stylesheet" href="update.css">
<!--link to js script DON'T FORGET TO IMPORT LIBRARY!

   this page comes from 'details.php'-->
	<script src="./jquery-3.1.0.js"></script>
	<script type="text/javascript" src="home.js"></script>

  <!--open header div-->

<div class='keaheader'>
	<a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a>
	
</div>
	
	<div class="container"> <!--open container div to allow creation of grid below.-->

    <?php
require_once('config_sql.inc');

/*
*the id is stored in the session array, here called 'data.'
*/
$id = $_SESSION['data'];

//pull everything from the db
$sql = ("SELECT * FROM consentform  WHERE id LIKE {$id}");
//learned you need the {} around the variable name.   

//run the query        
$people = $conn->query($sql);

if (mysqli_num_rows($people) > 0) {
    //need to find the matching data.  
    // output data of each row
  //echo $people;
    echo "<ul>\n";

//setup while loop. person equals select all from consentform and fetch assoc will find all the columns.  

while ($person = $people->fetch_assoc()) {
  ?>

  <form>

  <div id='left'> 
  <div style="text-align:center" id='left1'>

      <button class="button" type='submit' name='search' id='search' value='search' formaction = "admin.php" method='GET' >Back to search</button>

  </div>
  
  <?php    

 /*'<input type="text" name="firstname" value="'. htmlentities($row->firstname) .'" maxlength="50" required="required" />';*/

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

         <tr><td>Medical:</td>
         <td><input type = 'text' name='medical' value='" . htmlentities($person['medical']). "' maxlength='200' required='required' /></td></tr>

         </table>";
      ?>
      </div>
      <div id='middle'>
        <div id='middle1'style="text-align:center">

          <form action="../home.html" method='GET'>


          <button class="button" type='submit' name='home' id='home' value='submit'>Home</button>
        </div>
      
      <?php
        echo"<table>

        <th colspan ='2'>Primary Contact 1</th>

          <tr><td>Contact firstname</td>
          <td><input type = 'text' name='p1firstname' value='" . htmlentities($person['p1firstname']). "' maxlength='200' required='required' /></td></tr>

          <tr><td>Contact surname</td>
          <td><input type = 'text' name='p1surname' value='" . htmlentities($person['p1surname']). "' maxlength='200' required='required' /></td></tr>

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
           
           ?></div>
           <div id='right'>
              <div id='right1' style="text-align:center">
                  <form action="update.php" method='post'>
                  <button class="button" type='submit' name='save' id='save' value='save'>Save</button>
              </div>
   <?php
           echo"<table>

        <th colspan ='2'>Primary Contact 2</th>

          <tr><td>Contact firstname</td>
          <td><input type = 'text' name='p2firstname' value='" . htmlentities($person['p2firstname']). "' maxlength='200' required='required' /></td></tr>

          <tr><td>Contact surname</td>
          <td><input type = 'text' name='p2surname' value='" . htmlentities($person['p2surname']). "' maxlength='200' required='required' /></td></tr>

         <tr><td>Address:</td>
         <td><input type = 'text' name='p2address' value='" . htmlentities($person['p2address']). "' maxlength='200' required='required' /></td></tr>

         <tr><td>Phone</td>
         <td><input type = 'text' name='p2homePhone' value='" . htmlentities($person['p2homePhone']). "' maxlength='200' required='required' /></td></tr>

         <tr><td>Mobile No:</td>
         <td><input type = 'text' name='p2mobile' value='" . htmlentities($person['p2mobile']). "' maxlength='200' required='required' /></td></tr>

         <tr><td>Email:</td>
         <td><input type = 'text' name='p2email' value='" . htmlentities($person['p2email']). "' maxlength='200' required='required' /></td></tr>

         <tr><td>Relationship:</td>
         <td><input type = 'text' name='p2relation' value='" . htmlentities($person['p2relation']). "' maxlength='200' required='required' /></td></tr>

         </table>";
       };
     };
    ?>
    </form>
  </div> <!--closes the right1 div-->
</div> <!-- closes the container div-->
<?php 

/* this executes the code when the button is clicked. */

if( isset( $_POST['save'])) {

  require_once('config_sql.inc');

/*$data = "UPDATE consentform SET email='helens_new@mail.com' WHERE id='$id'";*/

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


