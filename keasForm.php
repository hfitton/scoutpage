<!DOCTYPE HTML>
<html>
  <head>
    <title>ScoutsNZ</title>
  </head>
  <body>

  <link rel="stylesheet" href="keasStyle.css">
<!--link to js script DON'T FORGET TO IMPORT LIBRARY!-->
	<script src="./jquery-3.1.0.js"></script>
	<script type="text/javascript" src="scoutscript.js"></script>
  <!--open header div-->
  <div class='header'>
  <img src="pictures/scoutheader.png" alt="Scout Banner" width=100%>
  </div> <!--closes header div-->

  <div class="container">

  <h2>Consent and application to join Waikanae Scout Group</h2>

  <div class="divider">
      <p>About your son or daughter</p>
  </div> <!--closes divider div

Everything in the form should have a label and id to make manipulation easier.  
<label for="firstname">First name</label>
<input type="text" name="firstname" id="firstname" maxlength="50" />-->

            <div class = 'left'>
              <form action="" method='post'>
                <label for ="surname">Surname:</label> <br><input type='text' name='surname' id = 'surname' required/><br>
                <label for ='firstname'>Firstname:</label><br><input type='text' name='firstname' id = 'firstname' required/><br>
                <label for ='address'>Address:</label><br><input type='text' name='address' id='address' required/><br>
                <label for = 'postcode'>Postcode:</label><br><input type='int' name='postcode' id='postcode' required/><br>
                <label for ='homePhone'>Home phone:</label><br> <input type='int' name='homePhone' id=homePhone required/><br>
                <label for='mobile'>Mobile phone:</label><br><input type='int' name='mobile' id='mobile' required/><br>
                <label for ='email'>Email:</label><br>	<input type='email' name='email' id='email' required/><br>
                <label for='dob'>Date of birth:</label><br><input type='date' name='dob' id='dob' required/><br>
            </div> <!--closes left div-->

            <div class='right'>
              <label for='schoolyr'>School Year:</label><br> <input type='int' name='schoolyr' id='schoolyr' required><br>

<!--want to use drop-down for ethnicity to reflect Scouts NZ options-->

              <label for='ethnicity'>Ethnicity:</label><br><select name='ethnicity' id='ethnicity' required>
					<option value = 'nzeuropean'>NZ European</option>
					<option value = 'maori'>Maori</option>
					<option value = 'english'>English</option>
					<option value = 'australian'>Australian</option>
					<option value = 'dutch'>Dutch</option>
					<option value = 'otherEuropean'>Other European</option>
					<option value = 'samoan'>Samoan</option>
					<option value = 'cookIslandMaori'>Cook Island Maori</option>
					<option value = 'tongan'>Tongan</option>
					<option value = 'niuean'>Niuean</option>
					<option value = 'tokelauan'>Tokelauan</option>
					<option value = 'fijian'>Fijian</option>
					<option value = 'otherpacificpeoples'>Other Pacific Peoples</option>
					<option value = 'filipino'>Filipino</option>
					<option value = 'chinese'>Chinese</option>
					<option value = 'korean'>Korean</option>
					<option value = 'cambodian'>Cambodian</option>
					<option value = 'otherasian'>Other Asian</option>
					<option value = 'middeleastern'>Middle Eastern</option>
					<option value = 'latinamerican'>Latin American</option>
					<option value = 'african'>African</option>
					<option value = 'notspecified'>Not specified</option>
					</select><br>

              <label for='school'>School:</label><br><input type='text' name='school' id='school' required><br>
              <label for='medical'>Medical Notes:</label><br>	<input type='text' name='medical' id='school' required><br>
              <label for='diet'>Dietary Notes:</label><br><input type='text' name='diet' id='diet' required><br>
              <label for='hobbies'>Interest and hobbies:</label><br> <input type='text' name='hobbies' id='hobbies' required><br>
              <br><label for=genqm>Male:</label> <input type=radio name='gender' id=genqm value=male>
              <label for =genqf>Female:</label> <input type=radio name='gender' id=genqf value=female>
		<label for =genqn>Gender Neutral:</label> <input type=radio name='gender' id=genqn value=neutral>
            </div> <!--closes right div-->

        <!--had to put a separate id else the form didn't flow properly.-->
        <div id="comment">General comments: (Please note any information that may limit you son or daughter from fully participating in activities):
            <input type='text' name='comments'>
        </div><br><br>

    <div class='divider'><p>About You</p></div>

    <div class = 'left'>

      <p>Parent / Caregiver 1</p>

        <label for='p1surname'>Surname: </label><br><input type='text' name='p1surname' id='p1username' required><br>
        <label for='p1firstname'>Firstname:</label><br><input type='text' name='p1firstname' id='p1firstname' required><br>

<!--checkbox should trigger js function to auto fill the address and tel no.-->

		<p><input type = 'checkbox' name='p1checkaddress' id='p1checkaddress'> Check this box if same address and home 'phone.</p>


        <label for='p1address'>Address:</label><br><input type='text' name='p1address' id='p1address' required><br>
        <label for='p1postcode'>Postcode:</label><br><input type='int' name='p1postcode' id='p1postcode' required><br>
        <label for='p1homePhone'>Home phone:</label><br> <input type='text' name='p1homePhone' id='p1homePhone' required><br>
        <label for='p1work'>Work phone:</label><br><input type='text' name='p1work' id='p1work'><br>
        <label for='p1mobile'>Mobile phone:</label><br><input type='text' name='p1mobile' id='p1mobile'><br>
        <label for='p1email'>Email:</label><br><input type='email' name='p1email' id='p1email'><br>
        <label for='p1relation'>Relationship to child:</label><br><input type='text' name='p1relation' id='p1relation'><br>
        <label for='p1occupation'>Occupation:</label><br> <input type='text' name='p1occupation' id='p1occupation'><br>
        <label for='p1skills'>Skills and qualifications:</label><br><input type='text' name='p1skills' id='p1skills'><br>
        <label for='p1interests'>Interests and hobbies:</label><br><input type='int' name='p1interests' id='p1interests'><br>
        <label for='p1sport'>Sports and activities:</label><br><input type='text' name='p1sport' id='p1sport'><br>
        <label for='p1experience'>Experience / achievement with youth organisations e.g. Scouts, Guides, St John etc as a youth or leader.</label><br><input type='text' name='p1experience' id='p1experience'><br>
     </div>

        <div class='right'>
          <p>Parent / Caregiver 2</p>
          Surname: <br><input type='text' name='p2surname'><br>
          Firstname:<br><input type='text' name='p2firstname'><br>

		<p><input type = 'checkbox' name ='p2checkaddress' id='p2checkaddress'> Check this box if same address and home 'phone.</p>


          <label for='p2address'>Address:</label><br><input type='text' name='p2address' id='p2address'><br>
          <label for='p2postcode'>Postcode:</label><br><input type='int' name='p2postcode' id='p2postcode'><br>
          <label for='p2homePhone'>Home phone:</label><br> <input type='int' name='p2homePhone' id='p2homePhone'><br>
          <label for='p2work'>Work phone:</label><br> <input type='int' name='p2work' id='p2work'><br>
          <label for='p2mobile'>Mobile phone:</label><br><input type='int' name='p2mobile' id='p2mobile'><br>
          <label for='p2email'>Email:</label><br><input type='email' name='p2email' id='p2email'><br>
          <label for='p2relation'>Relationship to child:</label><br><input type='text' name='p2relation' id='p2relation'><br>
          <label for='p2occupation'>Occupation:</label><br> <input type='text' name='p2occupation' id='p2occupation'><br>
          <label for='p2skills'>Skills and qualifications:</label><br><input type='text' name='p2skills' id='p2skills'><br>
          <label for='p2hobbies'>Interests and hobbies:</label><br><input type='text' name='p2interests' id='p2skills'><br>
          <label for='p2sport'>Sports and activities:</label><br><input type='text' name='p2sport' id='p2sport'><br>
          <label for='p2experience'>Experience / achievement with youth organisations e.g. Scouts, Guides, St John etc as a youth or leader.</label><br><input type='text' name='p2experience' id='p2experience'><br>
    </div>

      <div class='divider'><p>How You Can Support Our Group</p></div>
      <div class=questions>
        <p>Please indicate how you can best share in the help needed to make your child’s time in SCOUTS a real adventure.</p>

        <p><span style="float:right;"  >Parent / Caregiver 1     Parent / Caregiver 2
	</p></span><br>
        <p>Be a Leader <span style="float:right;">
          <label for =p1y>Yes:</label><input type=radio name=p1leader id=p1y checked="checked" value=1>
          <label for =q1>No:</label> <input type=radio name=p1leader id=q1 value=0>
          <label for =q1n>Yes:</label> <input type=radio name=p2leader id=q1n value=1 checked="checked">
          <label for =q1p2>No:</label> <input type=radio name=p2leader id=q1p2 value=0></span>
        </p>

    	<p>Be a Helper at meetings and other activities<span style="float:right;">
          <label for =q21y>Yes:</label><input type=radio name=p1helpMeet id=q21y value=1 checked="checked">
          <label for =q21n>No:</label> <input type=radio name=p1helpMeet id=q21n value=0>
          <label for =q22y>Yes:</label> <input type=radio name=p2helpMeet id=q22y value=1 checked="checked">
          <label for =q22n>No:</label> <input type=radio name=p2helpMeet id=q22n value=0></span>
        </p>

        <p>Serve on the Group Committee<span style="float:right;">
          <label for =q31y>Yes:</label><input type=radio name=p1groupCom id=q31y value=1 checked="checked">
          <label for =q31n>No:</label> <input type=radio name=p1groupCom id=q31n value=0>
          <label for =q32y>Yes:</label> <input type=radio name=p2groupCom id=q32y value=1 checked="checked">
          <label for =q32n>No:</label> <input type=radio name=p2groupCom id=q32n value=0></span>
        </p>

        <p>Help with financial records<span style="float:right;">
          <label for =q41y>Yes:</label><input type=radio name=p1finance id=q41y value=1 checked="checked">
          <label for =q41n>No:</label> <input type=radio name=p1finance id=q41n value=0>
          <label for =q42y>Yes:</label> <input type=radio name=p2finance id=q42y value=1 checked="checked">
          <label for =q42n>No:</label> <input type=radio name=p2finance id=q42n value=0></span>
        </p>

        <p>Secretarial work – i.e. word processing, copying<span style="float:right;" >
          <label for =q51y>Yes:</label><input type=radio name=p1secretary id=q51y value=1 checked="checked">
          <label for =q51n>No:</label> <input type=radio name=p1secretary id=q51n value=0>
          <label for =q52y>Yes:</label> <input type=radio name=p2secretary id=q52y value=1 checked="checked">
          <label for =q52n>No:</label> <input type=radio name=p2secretary id=q52n value=0></span>
        </p>

        <p>Marketing – Design brochures / distribute these<span style="float:right;"  >
          <label for =q61y>Yes:</label><input type=radio name=p1marketing id=q61y value=1 checked="checked">
          <label for =q61n>No:</label> <input type=radio name=p1marketing id=q61n value=0>
          <label for =q62y>Yes:</label> <input type=radio name=p2marketing id=q62y value=1 checked="checked">
          <label for =q62n>No:</label> <input type=radio name=p2marketing id=q62n value=0></span>
        </p>

        <p>Publicity – Write newspaper/ newsletter articles<span style="float:right;"  >
          <label for =q71y>Yes:</label><input type=radio name=p1publicity id=q71y value=1 checked="checked">
          <label for =q71n>No:</label> <input type=radio name=p1publicity id=q71n value=0>
          <label for =q72y>Yes:</label> <input type=radio name=p2publicity id=q72y value=1 checked="checked">
          <label for =q72n>No:</label> <input type=radio name=p2publicity id=q72n value=0></span>
        </p>

        <p>Help with fundraising activities<span style="float:right;"  >
          <label for =q81y>Yes:</label><input type=radio name=p1fundraising id=q81y value=1 checked="checked">
          <label for =q81n>No:</label> <input type=radio name=p1fundraising id=q81n value=0>
          <label for =q82y>Yes:</label> <input type=radio name=p2fundraising id=q82y value=1 checked="checked">
          <label for =q82n>No:</label> <input type=radio name=p2fundraising id=q82n value=0></span>
        </p>

        <p>Help with repair and maintenance of equipment or hall<span style="float:right;"  >
          <label for =q91y>Yes:</label><input type=radio name=p1repair id=q91y value=1 checked="checked">
          <label for =q91n>No:</label> <input type=radio name=p1repair id=q91n value=0>
          <label for =q92y>Yes:</label> <input type=radio name=p2repair id=q92y value=1 checked="checked">
          <label for =q92n>No:</label> <input type=radio name=p2repair id=q92n value=0></span>
        </p>

        <p>Training and testing for Interest Badges<span style="float:right;"  >
          <label for =q101y>Yes:</label><input type=radio name=p1badges id=q101y value=1 checked="checked">
          <label for =q101n>No:</label> <input type=radio name=p1badges id=q101n value=0>
          <label for =q102y>Yes:</label> <input type=radio name=p2badges id=q102y value=1 checked="checked">
          <label for =q102n>No:</label> <input type=radio name=p2badges id=q102n value=0></span>
        </p>

        <p>Help supervise games and other activities at Kea, Cub, Scout meetings and camps<span style="float:right;"  >
          <label for =q111y>Yes:</label><input type=radio name=p1supervise id=q111y value=1 checked="checked">
          <label for =q111n>No:</label> <input type=radio name=p1supervise id=q111n value=0>
          <label for =q112y>Yes:</label> <input type=radio name=p2supervise id=q112y value=1 checked="checked">
          <label for =q112n>No:</label> <input type=radio name=p2supervise id=q112n value=0></span>
        </p>

        <p>Providing transport for Keas, Cubs, Scouts or Venturers<span style="float:right;"  >
          <label for =q121y>Yes:</label><input type=radio name=p1transport id=q121y value=1 checked="checked">
          <label for =q121n>No:</label> <input type=radio name=p1transport id=q121n value=0>
          <label for =q122y>Yes:</label> <input type=radio name=p2transport id=q122y value=1 checked="checked">
          <label for =q122n>No:</label> <input type=radio name=p2transport id=q122n value=0></span>
        </p>

        <p>Assistance with social functions<span style="float:right;">
          <label for =q131y>Yes:</label><input type=radio name=p1social id=q131y value=1 checked="checked">
          <label for =q131n>No:</label> <input type=radio name=p1social id=q131n value=0>
          <label for =q132y>Yes:</label> <input type=radio name=p2social id=q132y value=1 checked="checked">
          <label for =q132n>No:</label> <input type=radio name=p2social id=q132n value=0></span>
        </p>

        <p>Other  - Please indicate any other ways you can help<br>
          <input type=text name=other size=60%> <span style="float:right;"  >
          <label for =q141y>Yes:</label><input type=radio name=p1other id=q141y value=1 checked="checked">
          <label for =q141n>No:</label> <input type=radio name=p1other id=q141n value=0>
          <label for =q142y>Yes:</label> <input type=radio name=p2other id=q142y value=1 checked="checked">
          <label for =q142n>No:</label> <input type=radio name=p2other id=q142n value=0></span>
        </p>

<div class=divider>Privacy Act</div>

<p>In compliance of the Privacy Act 1993 the following is brought to your attention.<br>
	<ul>
		<li>The Scout Association of New Zealand and this Scout Group collect personal information.</li>
		<li>The information is collected to: -</li>
			<ol>
				<li>enable enrolment in SCOUTS New Zealand</li>
				<li>make arrangements for your son’s and daughter’s participation, safety and welfare</li>
				<li>allow communication with you, your son and daughter and your family</li>	
				<li>allow for the planning and delivery of effective services through The Scout Association of New Zealand</li>
			</ol>
		<li>The information is being collected by this Group for SCOUTS New Zealand and will be used by the organisers and managers.
 It will form part of a directory of Scout personnel and membership records and is available to your Group,
 Zone and Region. It may be used to inform you about products and services offered or recommended by SCOUTS
  New Zealand, and opportunities to support SCOUTS New Zealand’s work.</li>
		<li>The information will be held securely, stored electronically and used for SCOUTS New Zealand purposes only.</li>
		<li>You have rights of access to, and correction of, this information subject to the provisions of the Privacy Act 1993.</li>
	</ul>

<div class=divider>Consent to take part in SCOUTS</div>

<p>
  I agree to my son or daughter becoming part of SCOUTS New Zealand at this Scout Group and fully participating in its adventurous activities.<br>
I agree that photographs taken during the course of activities and events are the property of SCOUTS New Zealand and may be used
 in publicity and marketing of SCOUTS New Zealand.<br>
I agree to share in the organising and running of this Scout Group.
</p>

 <span style="text-align:center;">
  <label for =consenty>Yes:</label> <input type=radio name=consent id=consenty value=1>
  <label for =consentn>No:</label> <input type=radio name=consent id=consentn value=0></span>

 <button class="button" type='submit'>Submit</button>

 </form></div> <!--closes container div-->

<div class=footer><img src="pictures/scoutfooter.png" alt="Adventure Plus Banner" width=100%></div>

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

$mysqli->query($data) or  trigger_error("Query Failed! SQL: $data - Error: ". $mysqli->error, E_USER_ERROR);
}

} catch( Exception $e ) {
  echo '<pre>';
  var_dump($e);
  echo '</pre>';
}

?>
</body>
</html>
