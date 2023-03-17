// function getUsername() {
//     $.ajax({
//         url: 'login_user.php',
//         type: 'GET',
//         success: function(data) {
//             updateNavbar(data);
//         }
//     });
// }


// function updateNavbar(name) {
//     if (name === "") {
//         // user is not logged in
//         $('#navbar').text("");
//     } else {
//         // user is logged in
//         $('#navbar').text("Welcome, " + name);
//     }
// }
function updateUserName() {
    $.ajax({
        url: "login_user.php",
        success: function(data) {
            if (data) {
                console.log("User is logged in.");
                $("#navbar-login-btn").hide(); // hide the login button
                $("#navbar").html('<a href="dashboard.html" class="p-2 px-6 pt-2 text-white bg-black rounded-md baseline hover:bg-blue-400 hover:text-black"> Welcome, ' + data + '</a>');
            } else {
                console.log("User is not logged in.");
                $("#navbar-login-btn").show(); // show the login button
                $("#navbar").html("");
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("AJAX error: " + textStatus + " - " + errorThrown);
        }
    });
}


// Call the function to update the user's name when the page loads
$(document).ready(updateUserName);


$("#logout-button").click(function(e) {
    e.preventDefault();
    $.ajax({
        url: "logout.php",
        success: function() {
            window.location.href = "index.html";
        }
    });
});