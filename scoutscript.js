$(document).ready(function() {

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

