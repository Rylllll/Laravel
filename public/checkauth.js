$(document).ready(function() {
    $.ajax({
        url: "check_auth.php",
        success: function(data) {
            if (!data.logged_in) {
                window.location.href = "login.html";
            }
        }
    });
});