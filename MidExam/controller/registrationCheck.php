<?php
require_once('../model/admin.php');


$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];




if (empty($firstname) ||empty($lastname) ||empty($phone) || empty($email) || empty($password) || empty($confirmPassword) || empty($gender) || empty($dob)) {
    echo "Null value!";
} elseif ($password != $confirmPassword) {
    echo "Password incorrect";
} elseif (strlen($firstname) < 2) {
    echo "Name should be at least  characters long";
} elseif (!isLowercase($firstname)) {
    echo "Name should contain only lowercase alphabetic characters";
}  elseif (strlen($lastname) < 2) {
    echo "Name should be at least  characters long";
} elseif (!isLowercase($lastname)) {
    echo "Name should contain only lowercase alphabetic characters";    
} 
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
} elseif (!in_array($gender, ['Male', 'Female', 'Other'])) {
    echo "Please select a gender";
} 
 $dobParts = explode('-', $dob);
if (count($dobParts) != 3) {
    echo "Invalid date of birth format";
} else {
    $day = $dobParts[0];
    $month = $dobParts[1];
    $year = $dobParts[2];
    if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
        echo "Date of birth must be numeric";
    } elseif ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1900 || $year > 2024) {
        echo "Invalid date of birth";
}else {
    $status = registration($firstname,$lastname,$phone, $email, $password, $gender, $dob);
    if ($status) {
        echo "Done";
    } else {
        echo "Name already taken! Try another one";
    }
}
}


function isLowercase($str) {
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] < 'a' || $str[$i] > 'z') {
            return false;
        }
    }
    return true;
}

?>