$(document).ready(function () {
    $("#register_from").validationEngine();
    $("#login_form").validationEngine();
});

    function blockUserInputs(obj, event, integers, characters, brackets, comma, backslash, attherateof, dot, underscore, hyphen, singleinvertedcomma, ampersent, allowspace, plus) {
        code = event.which;
        if (plus) {
            if (code == 43) {
                return true;
            }
        }
        if (integers) {
            if (code >= 48 && code <= 57) {
                return true;
            }
        }

        if (characters) {
            if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
                return true;
            }
        }

        if (brackets) {
            if (code >= 40 && code <= 41) {
                return true;
            }
        }

        if (comma) {
            if (code == 44) {
                return true;
            }
        }

        if (backslash) {
            if (code == 47) {
                return true;
            }
        }

        if (attherateof) {
            if (code == 64) {
                return true;
            }
        }

        if (dot) {
            if (code == 46) {
                return true;
            }
        }

        if (underscore) {
            if (code == 95) {
                return true;
            }
        }

        if (hyphen) {
            if (code == 45) {
                return true;
            }
        }

        if (singleinvertedcomma) {
            if (code == 39) {
                return true;
            }
        }

        if (ampersent) {
            if (code == 38) {
                return true;
            }
        }

        if (allowspace) {
            if (code == 32) {
                return true;
            }
        }

        code = event.keyCode;
        if (plus) {
            if (code == 43)
            {
                return true;
            }
        }

        if (integers) {
            if (code >= 48 && code <= 57) {
                return true;
            }
        }

        if (characters) {
            if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
                return true;
            }
        }

        if (brackets) {
            if (code >= 40 && code <= 41) {
                return true;
            }
        }

        if (comma) {
            if (code == 44) {
                return true;
            }
        }

        if (backslash) {
            if (code == 47) {
                return true;
            }
        }

        if (attherateof) {
            if (code == 64) {
                return true;
            }
        }

        if (dot) {
            if (code == 46) {
                return true;
            }
        }

        if (underscore) {
            if (code == 95) {
                return true;
            }
        }

        if (hyphen) {
            if (code == 45) {
                return true;
            }
        }

        if (singleinvertedcomma) {
            if (code == 39) {
                return true;
            }
        }

        if (ampersent) {
            if (code == 38) {
                return true;
            }
        }

        if (allowspace) {
            if (code == 32) {
                return true;
            }
        }

        // if ($.browser.mozilla) {
        //     //alert(code);
        //     if (code == 8 || code == 46 || (code >= 35 & code <= 40) || code == 9) {
        //         return true;
        //     }
        // }

        return false;
    }

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

    function displayDmv(id) {
        $.ajax({
                url: base_url + 'context/getDmvData' ,
                type: "POST",
                data: {'id':id},
                success: function(result){
                    $("#worklistModal").modal('show');
                    $("#worklist_data").html(result);            
            }
        });
    }

    function displayBank(id) {
        $.ajax({
                url: base_url + 'context/getBankData' ,
                type: "POST",
                data: {'id':id},
                success: function(result){
                    $("#worklist_data").html(result);            
                    $("#worklistModal").modal('show');
            }
        });
    }

    function approveWorklist() {
        id = $("#worklist_data input[name=id]").val();
        type = $("#worklist_data input[name=type]").val();
        
        if (type == 'dmv') {
            $.ajax({
                    url: base_url + 'context/dmvRequest' ,
                    type: "POST",
                    data: {'id':id , 'decision':true},
                    success: function(result){
                        alertify.success('Worklist approved succesfully!');
                        window.location.reload();          
                }
            });
        }
        if (type == 'bank') {
            $.ajax({
                    url: base_url + 'context/bankRequest' ,
                    type: "POST",
                    data: {'id':id , 'decision':true},
                    success: function(result){
                        alertify.success('Worklist approved succesfully!');
                        window.location.reload();          
                }
            });
        }   
    }