<!DOCTYPE HTML>
<html>
  <head>
    <title>results</title>
  </head>
  <body>
  <link rel="stylesheet" href="results.css">
	  <div class='keaheader'>
  		<a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a><br>
	  </div>

	<div class = 'results'>
<?php 

//you come to this page from scouts/admin/admin.php
//gets value sent over search form

	$data = $_POST['search']; 
  ?>
  <p> Field searched for: 
  <?php 
  echo $data;?></p>
  <?php
 
//log into mysql  
require_once('config_sql.inc');

//pull everything from the db where the firstname or surname match the data pulled from admin.php. The % allow upper or lower case letters. 
$sql = ("SELECT * FROM consentform   WHERE (firstname LIKE '%{$data}%') OR (surname LIKE '%{$data}%')");

//run the query        
$people = $conn->query($sql);

if (mysqli_num_rows($people) > 0) {
    //need to find the matching data.  
    // output data of each row
    echo "<ul>\n";

?>
<!-- don't know if this will work to send the data through-->
<form action="details.php" method="post" id="$person['id']">
<?php

//setup while loop. person equals select all from consentform and fetch assoc will find all the columns.    
while ($person = $people->fetch_assoc()) {
    echo "<li> 
		<a href='details.php?id=" . 
		$person['id'] . " '>"  .
		$person['surname'] . " " . 
		$person['firstname'] . " " . 
		$person['address'] . "
	</li>\n";


   /*

That way, you're turning your users name into a link to click on to see more details
then refer to $_GET['id'] in your details page
 Although, for "Reasons", when doing it in SQL, refer to the ID like this:
(int)$_GET['id']
*/
};



//closes the unordered list.
echo "</ul>\n";
};

?>
    </div>
    
		<button onclick="location.href='admin.php'" type="button" class='button'>Back to search</button><br>
		<button onclick="location.href='../home.html'" type="button" class='button'>Home</button><br>
</body>
</html>

	
