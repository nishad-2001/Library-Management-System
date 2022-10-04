<?php 
$user = $_POST['user'];
$password = $_POST['password'];

// mysql

$user = stripcslashes($user);
$password = stripcslashes($password);
$user = mysql_real_escape_string($user);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root", "");
mysql_select_db("login panel");

//connection

$result = mysql_query('select * from user where user ='$user' and password = '$password'') 
        or die("failed to login".mysql_error());
$row = mysql_fetch_array($result);
if($row['user'] == $user && $row['password'] == $password){
    echo "login success!!"
}
else
{
    echo 'login failed!!';
}
    
    ?>