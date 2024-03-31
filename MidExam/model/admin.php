<?php
require_once('db.php');

function registration($firstname,$lastname, $phone, $email, $password, $gender, $dob)
{
    $con = getConnection();

    
    $firstnameExists = isFirstNameExists($name);
    $lastnameExists = isLastNameExists($name);
    $emailExists = isEmailExists($email);

    if ($firstnameExists || $firstnameExists || $emailExists) {
        return false; 
    }

    
    $sql = "INSERT INTO userInfo (firstname, lastname, phone, email, password, gender, dob) VALUES('$firstname','$lastname','$phone', '$email', '$password', '$gender', '$dob')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true; 
    } else {
        return false; 
    }
}


function isFirstNameExists($firstname)
{
    $con = getConnection();
    $sql = "SELECT * FROM userInfo WHERE name = '$firstname'";
    $result = mysqli_query($con, $sql);
    return mysqli_num_rows($result) > 0;
}
function isLastNameExists($lastname)
{
    $con = getConnection();
    $sql = "SELECT * FROM userInfo WHERE name = '$lastname'";
    $result = mysqli_query($con, $sql);
    return mysqli_num_rows($result) > 0;
}

function isEmailExists($email)
{
    $con = getConnection();
    $sql = "SELECT * FROM userInfo WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    return mysqli_num_rows($result) > 0;
}


