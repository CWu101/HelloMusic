<?php
$conn = new mysqli("localhost","root","root","userdata");
$user=$_POST['username'];
$pwd=$_POST['password'];
if ($conn->connect_error){
    die("连接失败");
}
else{
    $check="select * from user where username='$user'";
    $res=mysqli_query($conn,$check);
    //var_dump($res);
    if($res->num_rows ==0){
        $sql = "INSERT INTO `user` (username, password) VALUES ('$user', '$pwd')";
        if ($conn->query($sql) === TRUE) {
            // SQL 语句执行成功
            echo "<script>
            alert('注册成功'); 
            window.history.back();
            window.location.href ='index.html';
            </script>";
        } else {
            // SQL 语句执行失败
            echo "<script>alert('注册失败，错误信息：" . $conn->error . "');</script>";
            echo "<script>window.history.back();</script>";
        }
    }
    else{
        echo "<script>alert('注册失败，用户名重复');</script>";
        echo "<script>window.history.back();</script>";
    }
}
$conn->close();
