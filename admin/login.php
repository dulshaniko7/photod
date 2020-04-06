<?php
//include_once "includes/classes/Database.php";
include_once "includes/classes/Session.php";
include_once "includes/classes/User.php";

/*
if($session->is_signed_in()){
    header("Location: index.php");
}
*/
echo "ok oi";

if(isset($_POST['submit'])) {
    echo "ok submit";
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
echo "half";
    $userFound = User::verify_user($username,$password);

    if($userFound){
        $session->login($userFound);
        header("Location: index.php");
echo  "ok";
    }
    else{
        echo "login error";
    }

}





/*
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
echo "submit ok";


$login_result = User::verify_user($username,$password);
$res = mysqli_fetch_assoc($login_result);

if($res){


    header("Location: index.php");
    echo "ok";
}
else{
    echo "error";
}
}
*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>Login</h3>
<form action="login.php" method="post">
    <label for="username">Username: </label>
    <input type="text" name="username"><br>
    <label for="password">Password: </label>
    <input type="password" name="password"><br>
    <br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>