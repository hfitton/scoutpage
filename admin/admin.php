<!DOCTYPE HTML>
<html>
  <head>
    <title>admin</title>
  </head>
  <body>
  	<link rel="stylesheet" href="admin.css">
    
<div class='keaheader'>
  	<a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a><br>
</div>

	<!--button to take you back to the homepage-->

	<div id ="form"><form action="results.php" method="post" id='searchform'>
    
		 <button onclick="location.href='../home.html'" type="button" class='button' label for='home'>Home</label></button><br>	

     <!-- Your name:<input type='text' name='name' label="name" id="name"></label><br> -->
      
    				<input type='text' required='required' placeholder= 'search here' name='search' id="search"><br>
       <!--search will take you to the results.php page.-->
        			<input type="submit" name='submit' value="search"/>
			</form>
	</div>
  </body>
</html>













<!--
             <label for='value1'>Search value one:</label><br><select name='value1' id='value1' required></label><br>
            <option value = "surname">Surname</option>
            <option value = "firstname">Firstname</option>
            <option value = "dob">Date of birth</option>
            <option value = "p1surname">Parent one's surname</option>
                </select><br>      
-->

<!--building the form--> <!--action="search.php?go"
	     <form action="results.php" method='post'>

do not forget to create the variable you wish to echo, else php won't know what it is. In this example, I hadn't set 'name' to name

		Your name:<input type='text' required='required' name='name' label="name" id="name"></label><br>
		Something else:<input type='text' required='required' name='test' label='test' id="test"></label><br>

            		<label for='value1'>Search value one:</label><br><select name='value1' id='value1' required></label><br>
			      <option value = "surname">Surname</option>
			      <option value = "firstname">Firstname</option>
			      <option value = "dob">Date of birth</option>
			      <option value = "p1surname">Parent one's surname</option>
            		</select><br>      

    <button class="button" type='submit'>Submit</button>
    </form>                  </div>   closed the form div-->
<!--next we build the php that will enter the data.  This is in results.php-->

