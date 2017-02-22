<!DOCTYPE HTML>
<html>
  <head>
    <title>admin</title>
  </head>
  <body>
  <link rel="stylesheet" href="admin.css">
  <title>Admin</title>
     </head>

	<!--button to take you back to the homepage-->

  <div id ="form">

	<form action="../home.html" method='post'>
		<button class="button" type='submit' name='submit' id='submit' value='submit'>Home</button>
	</form>

   <form action="results.php" method="post" id='searchform'>

      Your name:<input type='text' name='name' label="name" id="name"></label><br>
    Search for:<input type='text' required='required' name='test' label='test' id="test"></label><br>

             <label for='value1'>Search value one:</label><br><select name='value1' id='value1' required></label><br>
            <option value = "surname">Surname</option>
            <option value = "firstname">Firstname</option>
            <option value = "dob">Date of birth</option>
            <option value = "p1surname">Parent one's surname</option>
                </select><br>      


          
       
        <input type="submit" name='submit' value="Search" />

      </form>
      </div>














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

