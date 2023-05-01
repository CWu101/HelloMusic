
document.getElementById("btn").addEventListener("click", function(){
    var Username = document.getElementById("Username")
    var password = document.getElementById("password")
    if(Username.value=="123" && password.value=="123"){
        //window.location.href = '视差-2.html';
        alert("密码正确！")
    }
    else{
        alert("密码不正确！")
    }
})
