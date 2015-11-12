$(document).ready(function () {
    $("#register_from").validationEngine();
    $("#login_form").validationEngine();
});

    function registerUser() {
        if ($("#register_form").validationEngine('validate') == false)
        {
            return false;
        }
    }