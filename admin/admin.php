<!DOCTYPE HTML>
<html>
	<head>
    		<title>admin</title>
		<link rel="stylesheet" href="admin.css">
  	</head>
  	<body>

<?php
	

?>    
		<div class='keaheader'>
  			<a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a><br>
		</div>
		<!--button to take you back to the homepage-->
		<div id ="form">
			<form action="results.php" method="post" id='searchform'>    
		 	<button onclick="location.href='../home.html'" type="button" class='button' label for='home'>Home</label>
			</button><br>	
     			<!-- Your name:<input type='text' name='name' label="name" id="name"></label><br> -->      
    			<input type='text' required='required' placeholder= 'search here' name='search' id="search"><br>
       			<!--search will take you to the results.php page.-->
        		<input type="submit" name='submit' value="search"/>
			</form>
		</div>
  	</body>
</html>



