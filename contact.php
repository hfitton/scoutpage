

<!DOCTYPE HTML>
<html>
  <head>
    <title>Contact</title>
  </head>
  <body>

  <link rel="stylesheet" href="contact.css">
<!--link to js script DON'T FORGET TO IMPORT LIBRARY!-->
	<script src="./jquery-3.1.0.js"></script>
	<script type="text/javascript" src="homescript.js"></script>

  <!--open header div-->

<div class='keaheader'>
	<a href="home.html"><img src="pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a><br>
	Contact Us
</div>			

<div class="container">	 <!--open container div to allow creation of grid below.-->
	<div class="navbar">
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="keas.html">Keas</a></li>
			<li><a href="cubs.html">Cubs</a></li>
			<li><a href="scouts.html">Scouts</a></li>
			<li><a href="venturers.html">Venturers</a></li>
			<li><a href="rovers.html">Rovers</a></li>
			<li><a href="usefullinks.html">Useful Links</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="form.php">Joining Form</a></li>
		</ul>		
	 </div><!--closes navbar-->
	
      		<p>Please use the link below to contact us.</p>
      		<a href = "mailto: xxxxx"target='_top'>Send Mail to Waikanae Scouts</a>

  
			<!--changed the php file from keathanks to formsubmit on 1-1-17 whilst playing with blank field setting.
			 <form action="keathanks.php" method='post'>

 	<form action="confirm.php" method='post'>
            <div class = 'main'>             

                <label for ='parent_name'>Your name:</label> <br><input type='text' name='parent_name' id = 'parent_name' placeholder='Parent or caregiver name' required/><br>
		<label for='section'>Section interested in (Required):</label><br><select name='section' id='section' required>
					<option value = 'keas'>Keas</option>
					<option value = 'cubs'>Cubs</option>
					<option value = 'scouts'>Scouts</option>
					<option value = 'venturers'>Venturers</option>
					<option value = 'rovers'>Rovers</option>
					<option value = 'leaders'>Leaders</option>
					</select><br>

                <label for ='child'>Child's name:</label><br><input type='text' name='child' id = 'child' placeholder="Child's name" required/><br>
		<label for='schoolyr'>School Year:</label><br> <input type='int' name='schoolyr' id='schoolyr' placeholder='School year' required><br>
                <label for ='address'>Address:</label><br><input type='text' name='address' id='address' placeholder='Required' required/><br>
                <label for ='homePhone'>Home phone:</label><br> <input type='int' name='homePhone' id=homePhone placeholder='Required' required/><br>
                <label for='mobile'>Mobile phone:</label><br><input type='int' name='mobile' id='mobile' placeholder='Required' required/><br>
                <label for ='email'>Email:</label><br>	<input type='email' name='email' id='email' placeholder='Required' required/><br>   -->

<!--first time using textarea, this enables a larger box that will scroll the comment. Didn't really matter about width, 
as this was set via the id in CSS to match the other fields. 
   		<label for='comments'>Comments:</label><br><textarea name="comments" cols="50" rows="5"></textarea> <id='comments'><br>
             -->
 			
<!--
           </div> closes main div
<button class="button" type='submit' name='submit' id='center' value='submit'>Submit</button></form>


			to create new button need a new form with a form action for the button.

				<form action="home.html" method='post'>
				<button class="button" name='home' id='center' value='home'>Return Home</button>
				</form>	  
 </div  -closes container div-->

</body>
</html>




