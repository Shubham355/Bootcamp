function signup(){
    username = $('#username').val();
    password = $('#password').val();
    
    $.ajax({
        type: "POST",
        url: "backend/signup_ajax.php",
        data: {
            username,
            password
        },
        success: function (data) {
            if(data == 'success'){
                alert("Successfully Registered!");
                window.location = '';
            }else{
                alert("There was some problem, please try again later!");
            }
        }
    });
}