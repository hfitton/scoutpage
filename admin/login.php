<!DOCTYPE HTML>
<html>
	<head>
    		<title>login</title>
		<link rel="stylesheet" href="login.css">
  	</head>
  	<body>    
		<div class='keaheader'>
  			<a href="../home.html"><img src="../pictures/waikscoutbanner.png" alt = "Welcome to Waikanae Scout Group"></a><br>
		</div>
		<div id="container">
			<p>Please enter your details below to login.</p>			
				<form action="admin.php" method="post" id='register'>  			
					<label for='username'>Username:</label><br>
		     			<input type='text' required='required' placeholder= 'Username' name='username' id="username"><br>
					<label for='password'>Password:</label><br>
					<input type='password' required='required' placeholder= 'Password' name='password'id="password">
				<div id='buttons' style='text-align:center'>	
					<input type="submit" name='submit' class='button' value="Login">
					<p style='text-align:left'>New users can register below:</p>				
					<button onclick="location.href='register.html'" type="button" class='button'label for='register'>
					Register</label></button> 							       						<button onclick="location.href='../home.html'" type="button" class='button' label for='home'>
					Home</label></button>							
				</form>
				</div>
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

