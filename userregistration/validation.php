<?php
    session_start();
    $con = mysqli_connect('localhost','root','p@sw0rd');
    mysqli_select_db($con,'ureg');

    $uname = $_POST['user'];
    $upwd = $_POST['pwd'];

    $sql = "CALL getUsers('$uname','$upwd');";
    $result = mysqli_query($con,$sql);    
    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $uname;
        header('location:home.php');
    }else{
        echo "Incorrect username or password";
        header('location:login.php');
    }
?>