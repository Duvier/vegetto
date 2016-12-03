// Function that validates email address through a regular expression.
function validateEmail(sEmail) {
    var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (filter.test(sEmail)) {
        return true;
    } else {
        return false;
    }
}

$(document).ready(function () {
    $("#LoginBtn").click(function () {
        var email = $("#emailId").val();
        var password = $("#password").val();
        if (email == '' && password == '') {
            $(".login").addClass('animated bounce');
            $(".login").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass('animated bounce');
            });
        } else if (!(validateEmail(email)) || email == '') {
            $("#emailId").addClass('animated shake');
            $("#emailId").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass('animated shake');
            });
        } else if (password == '') {
            $("#password").addClass('animated shake');
            $("#password").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass('animated shake');
            });
        } else {
            /* write below POST method to send data to php file. 
             
             $.post("filename.php", {
             email1: email,
             password1: password
             }, function(data) {
             
             if (data == 'success') {
             $("form")[0].reset();
             }
             alert(data);
             });
             */

            $(".login").addClass('animated zoomOutDown');
            $(".login").hide();
            $(".welcomeMsg").html('Bienvenido !!').addClass('animated zoomInDown');
        }
    });
});