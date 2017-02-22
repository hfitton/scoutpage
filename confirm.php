<?php

try {
  if( isset( $_POST['parent_name']) ) {

  require_once('config_sql.inc');

$data = 'insert into contactform
      (
        parent_name,
        section,
        child,
        schoolyr,
        address,
        homePhone,
        mobile,
        email,
	comments
      )
      values
      (
        "' . $_POST["parent_name"] . '",
        "' . $_POST["section"] . '",
        "' . $_POST["child"] . '",
        "' . $_POST["schoolyr"] . '",
        "' . $_POST["address"] . '",
        "' . $_POST["homePhone"] . '",
        "' . $_POST["mobile"] . '",
       	"' . $_POST["email"] . '",
	"' . $_POST["comments"] . '"
	)
      ;
      '
      ;
//this is to check for blank fields and allow them to post without errors. 

$optional = array('parent_name', 'section', 'child', 'schoolyr', 'address', 'homePhone', 'mobile', 'email', 'comments');

//code to check each field.  If blank, can still be posted across. 
foreach($optional as $value) {
if( !isset($_POST['value']) || trim($_POST['value']) == '' ) {
  //what this does is for every optional field, if not set, then put a space in the value. This will allow the code to run and the data to not throw an error.  
   $value = '';
} else {} 
}


/*
1) form fields that MUST contain a string
2) form fields that optional contain a string
3) form fields that MUST contain a number
4) form fields that optionally contain a number
5) form fields that MUST contain a date in the future
6) form fields that MUST contain a date in the past
7) form fields that optionally contain a date
8) check box fields (that don't get passed if unticked)
Then loop thru those fields in those arrays with the relevant checks */

$mysqli->query($data) or  trigger_error("Query Failed! SQL: $data - Error: ". $mysqli->error, E_USER_ERROR);
}

} catch( Exception $e ) {
  echo '<pre>';
  var_dump($e);
  echo '</pre>';
}


   

//if(isset($_POST['key'])) { ... }

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>ContactThanks</title>
  </head>
  <body>

    <link rel="stylesheet" href="contact.css">
	<div class='wrapper'>
      		<div class='header'>


        		<img src="pictures/scoutbanner1.png" alt="Scout Banner" width=100%>

      		</div> <!--closes header div-->

	<form action="home.html" method='post'>

          	<p id='response'>Thank you for sending us your information. We will be in touch shortly.</p>

		<button class="button" type='submit' name='submit' id='submit' value='submit'>Home</button>
</form>


			
	</div>

</body>
</html>
