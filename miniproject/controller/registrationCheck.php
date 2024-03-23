<?php
require_once('../model/admin.php');


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$userType = $_REQUEST['userType'];



if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($name) || empty($email) || empty($userType)) {
    echo "Null value!";
} elseif ($password != $confirmPassword) {
    echo "Password incorrect";
} else {$status = signup($name, $email, $password,$name, $email, $userType);
    if ($status) {
        header('location: ../view/login.php');
    } else {
        echo "Name already taken! Try another one";
    }
}