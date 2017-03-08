<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>ScoutsNZ</title>
  </head>
  <body>
     	<link rel="stylesheet" href="details.css">
<!--link to js script DON'T FORGET TO IMPORT LIBRARY!-->
	<script src="./jquery-3.1.0.js"></script>
	<script type="text/javascript" src="scoutscript.js"></script>

  <div class='keaheader'>
  <a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a><br>
</div>
  

	 	<div class="container"> <!--open container div to allow creation of grid below.-->


    <?php
require_once('config_sql.inc');
/*
*$_GET['id']
In your sql, always refer to it as (int)$_GET['id']; So php converts it into an integer, and stops bad people doing things like:
http://localhost/details.php?id="delete * from user",
As prepending (int) would convert that to 0
you come to this page from the results page.  The id is the mysql id
*/
$id = (int)$_GET['id'];	

//pull everything from the db
$sql = ("SELECT * FROM consentform  WHERE id LIKE {$id}");
//learned you need the {} around the variable name.   
     
$people = $conn->query($sql);

if (mysqli_num_rows($people) > 0) 	{
    
    					echo "<ul>\n";
//setup while loop. person equals select all from consentform and fetch assoc will find all the columns.  
					while ($person = $people->fetch_assoc()) {
?>
  	<div id='left'> 
  		<div style="text-align:center" id='left1'>
      			<button onclick="location.href='admin.php'" type="button" class='button'>Back to search</button><br>
  		</div>
  
 <?php   
//the action (the target URL) of the form is set to point at the update.php page, and appending the ?id= section for passing it on
			$id = $person['id'];    

?>		<form action= "update.php" method="post" id ="$id">  <?php

			echo "<table>

			<th colspan ='2'>Member's Details</th>

			<tr><td>Name:  </td><td>".$person['firstname']

			 . " " . $person['surname']S . "</td></tr>

			<tr><td>Address:</td><td>" . $person['address'] . "</td></tr>

			 <tr><td>Phone</td><td>" . $person['homePhone']. "</td></tr>

			 <tr><td>Mobile No:</td><td>" . $person['mobile'] . "</td></tr>

			 <tr><td>Email:</td><td>" . $person['email'] . "</td></tr>

			 <tr><td>Date of birth:</td><td>" . $person['dob'] . "</td></tr>

			 <tr><td>School yr:</td><td>" . $person['schoolyr'] . "</td></tr>

			 <tr><td>School:</td><td>" . $person['school'] . "</td></tr>

			 <tr><td>Ethnicity:</td><td>" . $person['ethnicity'] . "</td></tr>

			 <tr><td>Gender:</td><td>" . $person['gender'] . "</td></tr>

			 <tr><td>Medical notes:</td><td>" . $person['medical'] . "</td></tr>

			 <tr><td>Comments:</td><td>" . $person['comments'] . "</td></tr>

			 <tr><td>Medical:</td><td>".$person['medical'] . "</td></tr>

			 <tr><td>Diet:</td><td>" . $person['diet'] . "</td></tr>

			 </table>";
?>
      </div>
      	<div id='middle'>
      		<div id='middle1'style="text-align:center">
 			 <button onclick="location.href='../home.html'" type="button" class='button'>Home</button><br>
  		</div>
      
<?php
        echo"<table>
        	<th colspan ='2'>Primary Contact 1</th>
          		<tr><td>Parent / Carer</td><td>".$person['p1firstname'] . " " . $person['p1surname']. "</td></tr>
         		<tr><td>Address:</td><td>" . $person['p1address'] . "</td></tr>
         		<tr><td>Phone</td><td>" . $person['p1homePhone']. "</td></tr>
			 <tr><td>Mobile No:</td><td>" . $person['p1mobile'] . "</td></tr>
			 <tr><td>Email:</td><td>" . $person['p1email'] . "</td></tr>
			 <tr><td>Relationship:</td><td>" . $person['p1relation'] . "</td></tr>
         </table>";
           
           ?></div>
           <div id='right'>
           <div id='right1' style="text-align:center">


    <button class="button" type='submit' name='submit' id='submit' value='submit'>Edit</button>
    </div>
 
           <?php
           echo "<table>
           <th colspan ='2'>Primary Contact 2</th>
           <tr><td>Parent / Carer</td><td>".$person['p2firstname'] . " " . $person['p2surname']. "</td></tr>
         <tr><td>Address:</td><td>" . $person['p2address'] . "</td></tr>
         <tr><td>Phone</td><td>" . $person['p2homePhone']. "</td></tr>
         <tr><td>Mobile No:</td><td>" . $person['p2mobile'] . "</td></tr>
         <tr><td>Email:</td><td>" . $person['p2email'] . "</td></tr>
         <tr><td>Relationship:</td><td>" . $person['p2relation'] ."</td></tr>
         </table>"; 
       };
     };
    ?></form>
</div>


  
