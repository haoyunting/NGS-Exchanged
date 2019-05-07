function login() {
 
    var username = document.getElementById("username");
    var pass = document.getElementById("password");
 
    if (username.value == "") {
 
        alert("please input username");
 
    } else if (pass.value  == "") {
 
        alert("please input password");
 
    } else if(username.value == "admin" && pass.value == "123456"){
 
        window.location.href="https://my.utm.my/";
    }
    else if(username.value == "admin" && pass.value == "123456"){
 
        window.location.href="https://my.utm.my/";
 
    } else {
 
        alert("please input correct usename or password！")
 
    }
}
