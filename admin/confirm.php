
<!DOCTYPE HTML>
<!-- you come here from update.php-->
<html>
  <head>
    <title>Confirmation</title>
  <link rel="stylesheet" href="confirm.css">
  </head>
  	<body>
		<div class='keaheader'>
			<a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a>
		</div>
	
<?php

if( isset( $_POST['register']) ) 
{
			require_once('config_sql.inc');	
			$id = (int)$_GET['id']; 

// Check connection
			if (mysqli_connect_errno()) 
			{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$query = "
			UPDATE consentform
			SET firstname = '". $conn->real_escape_string( $_POST['firstname'] )."',
			surname = '". $conn->real_escape_string( $_POST['surname'] )."',
			address = '". $conn->real_escape_string( $_POST['address'] )."',
			homePhone = '". $conn->real_escape_string( $_POST['homePhone'] )."',
			mobile = '". $conn->real_escape_string( $_POST['mobile'] )."',
			email = '". $conn->real_escape_string( $_POST['email'] )."',
			dob = '". $conn->real_escape_string( $_POST['dob'] )."',
			schoolyr = '". $conn->real_escape_string( $_POST['schoolyr'] )."',
			school = '". $conn->real_escape_string( $_POST['school'] )."',
			ethnicity = '". $conn->real_escape_string( $_POST['ethnicity'] )."',
			gender = '". $conn->real_escape_string( $_POST['gender'] )."',
			medical = '". $conn->real_escape_string( $_POST['medical'] )."',
			diet = '". $conn->real_escape_string( $_POST['diet'] )."',
			comments = '". $conn->real_escape_string( $_POST['comments'] )."',
			p1firstname = '". $conn->real_escape_string( $_POST['p1firstname'] )."',
			p1surname = '". $conn->real_escape_string( $_POST['p1surname'] )."',
			p1address = '". $conn->real_escape_string( $_POST['p1address'] )."',
			p1homePhone = '". $conn->real_escape_string( $_POST['p1homePhone'] )."',
			p1mobile = '". $conn->real_escape_string( $_POST['p1mobile'] )."',
			p1email = '". $conn->real_escape_string( $_POST['p1email'] )."',
			p1relation = '". $conn->real_escape_string( $_POST['p1relation'] )."',
			p2firstname = '". $conn->real_escape_string( $_POST['p2firstname'] )."',
			p2surname = '". $conn->real_escape_string( $_POST['p2surname'] )."',
			p2address = '". $conn->real_escape_string( $_POST['p2address'] )."',
			p2homePhone = '". $conn->real_escape_string( $_POST['p2homePhone'] )."',
			p2mobile = '". $conn->real_escape_string( $_POST['p2mobile'] )."',
			p2email = '". $conn->real_escape_string( $_POST['p2email'] )."',
			p2relation = '". $conn->real_escape_string( $_POST['p2relation'] )."'
			WHERE id=$id
			LIMIT 1";

			$conn->query($query) or  trigger_error("Query Failed! SQL: $query - Error: ". $conn->error, E_USER_ERROR);

			if (!mysqli_query($conn,$query)) 
			{
  			die('Error: ' . mysqli_error($conn));
			}
			echo "1 record added";
			mysqli_close($conn);
}



