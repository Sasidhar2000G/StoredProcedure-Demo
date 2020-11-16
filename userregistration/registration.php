<?php
    session_start();
    header('location:login.php');
    $con = mysqli_connect('localhost','root','p@sw0rd');
    mysqli_select_db($con,'ureg');

    $name = $_POST['user'];
    $pwd = $_POST['pwd'];

    $s = " select * from utable where name = '$name'";

    $result = mysqli_query($con,$s);
    
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Username Already Taken";
    }else{
        $reg = "insert into utable(name ,pwd) values ('$name','$pwd')";
        mysqli_query($con, $reg);
        echo "Registration Successful";
    }
?>