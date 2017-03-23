$(document).ready(function() 
	
{

	function myFunction() {
    	var pass1 = document.getElementById("password").value;
    	var pass2 = document.getElementById("confirmpassword").value;
    	var ok = true;
    	if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("password").style.borderColor = "#E34234";
        document.getElementById("confirmpassword").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
}

	//$('form').on('submit',function()
		{
    		if($(this).find('input[name="password"]').val() != $(this).find('input[name="confirmpassword"]').val()){
        	alert("Passwords do no match");
        	return false;
    		}
		
});

/*
$("#submit").submit(function(){
    var isFormValid = true;

    $(".required input").each(function(){
        if ($.trim($(this).val()).length == 0){
            $(this).addClass("highlight");
            isFormValid = false;
        }
        else{
            $(this).removeClass("highlight");
        }
    });

    if (!isFormValid) alert("Please fill in all the required fields (indicated by *)");

    return isFormValid;
});

//don't mess with this code, it completes the address field for me. 
$("#p1checkaddress").click(function(){
   if( $(this).is(':checked') ) {
      $('#p1address').val( $('#address').val() );
      $('#p1postcode').val( $('#postcode').val() );
      $('#p1homePhone').val( $('#homePhone').val() );
   }
});

$("#p2checkaddress").click(function(){
   if( $(this).is(':checked') ) {
      $('#p2address').val( $('#address').val() );
      $('#p2postcode').val( $('#postcode').val() );
      $('#p2homePhone').val( $('#homePhone').val() );
}
});



	

//closes the original document ready function. 
});
*/
