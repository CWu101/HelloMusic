<?php
$conn = new mysqli("localhost","root","root","userdata");
$user=$_POST['username'];
$pwd=$_POST['password'];
if ($conn->connect_error){
    die("连接失败");
}
else{
    $sql="select * from user where username='$user' and password = '$pwd'";
    $res=mysqli_query($conn,$sql);
    //var_dump($res);
    if($res->num_rows >0){
        echo "<script>
        alert('登录成功'); 
        window.location.href = 'http://localhost/HelloMusic/main_page.html'
        </script>";
    }
    else{
        echo "<script>alert('登录失败');</script>";
        echo "<script>window.history.back();</script>";
    }
}