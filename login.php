<?php

print_r($_POST);

if(empty($_POST["email"])){
    die("Name is required");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
var_dump($password_hash); 