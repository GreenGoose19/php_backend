<?php
if($_SERVER["REQUEST _METHOD"]=="POST"){
    $email=$_POST["email"];
    $password=$_POST["pswd"];
    echo "Email: ".$email."<br>";
    echo "Password: ",$password;

}