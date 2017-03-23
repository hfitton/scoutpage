<!DOCTYPE HTML>
<!-- you come here from confirmreg.php-->
<html>
  <head>
    <title>Confirmation</title>
    <link rel="stylesheet" href="confirmreg.css">
  </head>
  <body>	
	<?php
//--------------------------------------------------------
	$username = $_POST["username"];
	echo $username;
	require_once('config_sql.inc');

	// $sql = "SELECT username from register WHERE username = ".$username;
	$sql = mysql_query("SELECT username FROM register WHERE username='".$username."'");

	$result=$conn->query($sql);
	
	if (mysqli_num_rows($result) > 1)
		{
		echo "Duplicate username!";
		}
		else
		{
		echo "awesome choice!";
		};

/*
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
	

	//Select password from users where username = '{$_POST['username']}';
//need to check the password against the hashed password in the db.  */
//---------------------------------------------------------

	if ($_POST["password"] === $_POST["confirmpassword"]) 
	{
	}				
	else 
	{ 
		echo "Your passwords do not match. :( ";
	};

	require_once('config_sql.inc');	
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	};


	echo "hi " . $_POST["name"].",";
	echo " your password is: " .$_POST["password"]."\n";

// this hashes the password and automatically adds the salt. 
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	$data = 'insert into register
		(
		name,
		username,
		password
		)
		VALUES 
		(
		"' . mysqli_real_escape_string($conn, $_POST['name']) .'",
		"' . mysqli_real_escape_string($conn, $_POST['username']) .'",
		"'. $password . '"
		)';
	//$conn->query($data) or  trigger_error("Query Failed! SQL: $data - Error: ". $conn->error, E_USER_ERROR);

			if (!mysqli_query($conn,$data)) 
			{
  			die('Error: ' . mysqli_error($conn));
			}
			//echo "1 record added";
			mysqli_close($conn);
	?>
	<div class='keaheader'>
		<a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a>
	</div>
	<div class="container">
		<p id='response'>Thank you for registering with Waikanae Scout Group.  You may now login.</p>
		<form action="login.php" method='post'>
				<button class="button" type='submit' name='submit' id='submit' value='submit'>Login</button>
		</form>
	</div>

