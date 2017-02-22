<!DOCTYPE HTML>
<html>
  <head>
    <title>Thanks</title>
  </head>
  <body>

    <link rel="stylesheet" href="keasStyle.css">

<?php

try {
  if( isset( $_POST['surname']) ) {

  require_once('config_sql.inc');

$data = 'insert into consentform
      (
        surname,
        firstname,
        address,
        postcode,
        homePhone,
        mobile,
        email,
        dob,
	schoolyr,
	ethnicity,
	school,
	medical,
	diet,
	hobbies,
	gender,
	comments,
	p1surname,
	p1firstname,
	p1address,
	p1postcode, 
	p1homePhone,
	p1work,
	p1mobile,
	p1email,
	p1relation,
	p1occupation,
	p1skills,
	p1interests,
	p1sport,
	p1experience,
	p2surname,
	p2firstname,
	p2address,
	p2postcode, 
	p2homePhone,
	p2work,
	p2mobile,
	p2email,
	p2relation,
	p2occupation,
	p2skills,
	p2interests,
	p2sport,
	p2experience,
	p1leader,
	p2leader,
	p1helpMeet,
	p2helpMeet,
	p1groupCom,
	p2groupCom,
	p1finance,
	p2finance,
	p1secretary,
	p2secretary,
	p1marketing,
	p2marketing,
	p1publicity,
	p2publicity,
	p1fundraising,
	p2fundraising,
	p1repair,
	p2repair,
	p1badges,
	p2badges,
	p1supervise,
	p2supervise,
	p1transport, 
	p2transport,
	p1social,
	p2social,
	other,
	p1other,
	p2other,
	consent
      )
      values
      (
        "' . $_POST["surname"] . '",
        "' . $_POST["firstname"] . '",
        "' . $_POST["address"] . '",
        "' . $_POST["postcode"] . '",
        "' . $_POST["homePhone"] . '",
        "' . $_POST["mobile"] . '",
        "' . $_POST["email"] . '",
        "' . date("Y-m-d", strtotime($_POST['dob'])).'",
	"' . $_POST["schoolyr"] . '",
	"' . $_POST["ethnicity"] . '",
	"' . $_POST["school"] . '",
	"' . $_POST["medical"] . '",
	"' . $_POST["diet"] . '",
        "' . $_POST["hobbies"] . '",
	"' . $_POST["gender"] . '",
        "' . $_POST["comments"] . '",
	"' . $_POST["p1surname"] . '",
	"' . $_POST["p1firstname"] . '",
        "' . $_POST["p1address"] . '",
	"' . $_POST["p1postcode"] . '",
        "' . $_POST["p1homePhone"] . '",
	"' . $_POST["p1work"] . '",
	"' . $_POST["p1mobile"] . '",
	"' . $_POST["p1email"] . '",
	"' . $_POST["p1relation"] . '",
	"' . $_POST["p1occupation"] . '",
	"' . $_POST["p1skills"] . '",
	"' . $_POST["p1interests"] . '",
	"' . $_POST["p1sport"] . '",
	"' . $_POST["p1experience"] . '",
	"' . $_POST["p2surname"] . '",
	"' . $_POST["p2firstname"] . '",
        "' . $_POST["p2address"] . '",
	"' . $_POST["p2postcode"] . '",
        "' . $_POST["p2homePhone"] . '",
	"' . $_POST["p2work"] . '",
	"' . $_POST["p2mobile"] . '",
	"' . $_POST["p2email"] . '",
	"' . $_POST["p2relation"] . '",
	"' . $_POST["p2occupation"] . '",
	"' . $_POST["p2skills"] . '",
	"' . $_POST["p2interests"] . '",
	"' . $_POST["p2sport"] . '",
	"' . $_POST["p2experience"] . '",
	"' . $_POST["p1leader"] . '",
	"' . $_POST["p2leader"] . '",
	"' . $_POST["p1helpMeet"] . '",
	"' . $_POST["p2helpMeet"] . '",
	"' . $_POST["p1groupCom"] . '",
	"' . $_POST["p2groupCom"] . '",
	"' . $_POST["p1finance"] . '",
	"' . $_POST["p2finance"] . '",
	"' . $_POST["p1secretary"] . '",
	"' . $_POST["p2secretary"] . '",
	"' . $_POST["p1marketing"] . '",
	"' . $_POST["p2marketing"] . '",
	"' . $_POST["p1publicity"] . '",
	"' . $_POST["p2publicity"] . '",
	"' . $_POST["p1fundraising"] . '",
	"' . $_POST["p2fundraising"] . '",
	"' . $_POST["p1repair"] . '",
	"' . $_POST["p2repair"] . '",
	"' . $_POST["p1badges"] . '",
	"' . $_POST["p2badges"] . '",
	"' . $_POST["p1supervise"] . '",
	"' . $_POST["p2supervise"] . '",
	"' . $_POST["p1transport"] . '",
	"' . $_POST["p2transport"] . '",
	"' . $_POST["p1social"] . '",
	"' . $_POST["p2social"] . '",
	"' . $_POST["other"] . '",
	"' . $_POST["p1other"] . '",
	"' . $_POST["p2other"] . '",
	"' . $_POST["consent"] . '"

	)
      ;
      '
      ;
//this is to check for blank fields and allow them to post without errors. 

/*
if( !isset($_POST['diet']) || trim($_POST['diet']) == '' ) {
  	$diet = '';
	} else {} 

if( !isset($_POST['hobbies']) || trim($_POST['hobbies']) == '' ) {
  	$hobbies = '';
	} else {} 

if( !isset($_POST['comments']) || trim($_POST['comments']) == '' ) {
  	$comments = '';
	} else {} 

if( !isset($_POST['p1work']) || trim($_POST['p1work']) == '' ) {
  	$p1work = '';
	} else {} 

if( !isset($_POST['p1mobile']) || trim($_POST['p1mobile']) == '' ) {
  	$p1mobile = '';
	} else {} 

if( !isset($_POST['p1relation']) || trim($_POST['p1relation']) == '' ) {
  	$p1relation = '';
	} else {} 

if( !isset($_POST['p1occupation']) || trim($_POST['p1occupation']) == '' ) {
  	$p1occupation = '';
	} else {} 

if( !isset($_POST['p1skills']) || trim($_POST['p1skills']) == '' ) {
  	$p1skills = '';
	} else {} 

if( !isset($_POST['p1interests']) || trim($_POST['p1interests']) == '' ) {
  	$p1interests = '';
	} else {} 

if( !isset($_POST['p1sport']) || trim($_POST['p1sport']) == '' ) {
  	$p1sport = '';
	} else {} 

if( !isset($_POST['p1experience']) || trim($_POST['p1experience']) == '' ) {
  	$p1experience = '';
	} else {} 


if( !isset($_POST['p2surname']) || trim($_POST['p2surname']) == '' ) {
  	$p2surname = '';
	} else {} 

if( !isset($_POST['p2firstname']) || trim($_POST['p2firstname']) == '' ) {
  	$p2firstname = '';
	} else {} 

if( !isset($_POST['p2address']) || trim($_POST['p2address']) == '' ) {
  	$p2address = '';
	} else {} 

if( !isset($_POST['p2postcode']) || trim($_POST['p2postcode']) == '' ) {
  	$p2postcode = '';
	} else {} 

if( !isset($_POST['p2homePhone']) || trim($_POST['p2homePhone']) == '' ) {
  	$p2homePhone = '';
	} else {} 

if( !isset($_POST['p2work']) || trim($_POST['p2work']) == '' ) {
  	$p2work = '';
	} else {} 

if( !isset($_POST['p2mobile']) || trim($_POST['p2mobile']) == '' ) {
  	$p2mobile = '';
	} else {} 

if( !isset($_POST['p2email']) || trim($_POST['p2email']) == '' ) {
  	$p2email = '';
	} else {} 

if( !isset($_POST['p2relation']) || trim($_POST['p2relation']) == '' ) {
  	$p2relation = '';
	} else {} 

if( !isset($_POST['p2occupation']) || trim($_POST['p2occupation']) == '' ) {
  	$p2occupation = '';
	} else {} 

if( !isset($_POST['p2skills']) || trim($_POST['p2skills']) == '' ) {
  	$p2skills = '';
	} else {} 

if( !isset($_POST['p2interests']) || trim($_POST['p2interests']) == '' ) {
  	$p2interests = '';
	} else {} 

if( !isset($_POST['p2sport']) || trim($_POST['p2sport']) == '' ) {
  	$p2sport = '';
	} else {} 

if( !isset($_POST['p2experience']) || trim($_POST['p2experience']) == '' ) {
  	$p2experience = '';
	} else {} 
*/

//set up array for the optional fields. 

$optional = array('school', 'medical', 'diet', 'hobbies', 'comments', 'p1work', 'p1mobile', 'p1email', 'p1relation', 'p1occupation', 'p1skills', 'p1interests',
'p1sport', 'p1experience', 'p2surname', 'p2firstname', 'p2address', 'p2postcode', 'p2homePhone', 'p2work', 'p2mobile', 'p2email', 
'p2relation', 'p2occupation', 'p2skills', 'p2interests', 'p2sport', 'p2experience');

//code to check each field.  If blank, can still be posted across. 
foreach($optional as $value) {
if( !isset($_POST['value']) || trim($_POST['value']) == '' ) {
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
