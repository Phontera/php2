<?php

print_r($_POST);

$first_name = $_POST['first_name'] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != "" ? $_POST['last_name'] : $errorCount++;
$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] : $errorCount++;
$password = $_POST['gender'] != "" ? $_POST['gender'] : $errorCount++;
$role = $_POST['role'] != "" ? $_POST['role'] : $errorCount++;


$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['gender'] = $gender;
$_SESSION['role'] = $role;


if($errorCount > 0){
$_SESSION["error"] = "You have" . $errorCount . "errors in your form submission";
header("Location: register.php");

}else{
  echo "Success";
}
