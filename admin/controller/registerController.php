<?php
require_once '../service.php';


$first= $_POST['first_name'];
$last= $_POST['last_name'];
$phone= $_POST['phone'];
$location= $_POST['location'];
$email= $_POST['email'];
$password= $_POST['password'];
$role= $_POST['role'];
$photo= $_POST['photo'];


 $usersdb->create($first_name, $last_name, $phone, $location, $email, $password, $role, $photo);

 header('Location:../../login.php');
 

?>