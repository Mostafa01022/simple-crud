<?php
$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

if(isset($_POST['update'])){

$id   = $_POST['id'];
$name   = $_POST['username'];
$email   = $_POST['email'];
$password   = $_POST['password'];
$gender   = $_POST['gender'];
$repeat   = $_POST['repassword'];


if(empty($name)||empty($email)||empty($password)||empty($gender)||empty($repeat)||$password!==$repeat){

    if(empty($name)){echo "<font color='red'>Name field is empty.</font><br/>";}
    if(empty($email)){echo "<font color='red'>Email field is empty.</font><br/>";}
    if(empty($password)){echo "<font color='red'>Password field is empty.</font><br/>";}
    if(empty($repeat)){echo "<font color='red'>Please repeat password.</font><br/>";}
    if(empty($gender)){echo "<font color='red'>Gender field is empty.</font><br/>";}
    if($password!==$repeat){echo "<font color='red'>password must be the same.</font><br/>";}
}
else{
    $results=mysqli_query($mysqli," UPDATE users SET username='$name',email='$email',password='$password',gender='$gender'where id='$id'  " );

    echo "good";
    header("Location:page2.php");

}}
