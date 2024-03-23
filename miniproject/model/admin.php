<?php
require_once('db.php');

function signup($name, $email, $password, $confirmpassword, $userType)
{
    $con = getConnection();
    $sql = "INSERT INTO userInfo (password, confirmpassword, name, email, userType) VALUES('$password','$confirmpassword', '$name', '$email', '$userType')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true; 
    } else {
        return false; 
    }
}

function login($name, $password)
{
    $con = getConnection();       
    $sql = "SELECT * FROM userInfo WHERE name='{$id}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    
    if($result){
        $user = mysqli_fetch_assoc($result);
        if ($user)
        {
            return array('status' => true, 'userType' => $user['userType']);
        }         
    }
    
    return array('status' => false);
}
