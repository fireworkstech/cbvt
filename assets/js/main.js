$(document).ready(function () {
    $("#register_from").validationEngine();
    $("#login_form").validationEngine();
});

    function registerUser() 
    {
        if ($("#register_form").validationEngine('validate') == false)
        {
            return false;
        }
    }

    $('.deleterow').click(function(){
	   var conf = confirm('Continue delete?');
	   if(conf)
	      jQuery(this).parents('tr').fadeOut(function(){
	         jQuery(this).remove();
	         // do some other stuff here
	      });
	   return false;
	}); 

    function displayWorklistModal(worklist) {
        $("#worklistModal").modal('show');
    }