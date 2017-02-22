<!--broke the php to insert the html div results for formatting in css-->
  <div class = 'results'>
  <?php 

//you come to this page from scouts/admin/admin.php

//welcome message

//echo "<h4>Welcome to this page, ".$_POST['name1']. " .</h4>";

//echo "<h4>Welcome to this page, ".$_POST['test']. " .</h4>";

 $data = $_POST['test']; 
 $value = $_POST['value1'];
    // gets value sent over search form

  ?>
  <p> Field searched for: 
  <?php 
  echo $data;?></p>
  <?php
 //echo $value;

//log into mysql  
require_once('config_sql.inc');

//pull everything from the db where the firstname or surname match the data pulled from admin.php. The % allow upper or lower case letters. 
$sql = ("SELECT * FROM consentform   WHERE (firstname LIKE '%{$data}%') OR (surname LIKE '%{$data}%')");

 //WHERE (LastName LIKE 'r%') OR (FirstName LIKE 'a%')

//run the query        
$people = $conn->query($sql);

if (mysqli_num_rows($people) > 0) {
    //need to find the matching data.  
    // output data of each row
    echo "<ul>\n";

//setup while loop. person equals select all from consentform and fetch assoc will find all the columns.    
while ($person = $people->fetch_assoc()) {
    echo "<li> <a href='details.php?id=" . $person['id'] . " '>"  .$person['surname'] . " " . $person['firstname'] . " " . $person['address'] . "</li>\n";
/*

That way, you're turning your users name into a link to click on to see more details
then refer to $_GET['id'] in your details page
 Although, for "Reasons", when doing it in SQL, refer to the ID like this:
(int)$_GET['id']
*/
};


//closes the unordered list.
echo "</ul>\n";
};

?>
    </div>
<form action="admin.php" method='post'>
		<button class="button" type='submit' name='submit' id='submit' value='submit'>Back to search</button>
	</form>
</div>
