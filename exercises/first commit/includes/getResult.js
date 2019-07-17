$(document).ready(function () {
    $("#submitLogin").attr("onclick", "getUser()");
});

var getUser = function() {
    var username = $('#user').val();
    var password = $('#pass').val();

    var query = "SELECT * FROM tb_users_209_1 Where username='"+username+"' AND password='"+password+"';";
    console.log(query);
    $.post('query.php', { query: query }, function (res) {//switch to query.php
        console.log(res);
        if(res == '[]'){
            console.log('error occured1 - username or password are invalid');
        }
        if (res == "NULL")
            console.log('error occured2 - if there a problem in the query');
        else {
            //authantication
            var obj = JSON.parse(res)[0];
            window.location = "./myMenu.php?username="+ obj.username+"&Type=" +obj.Type;
        }
    });
}   