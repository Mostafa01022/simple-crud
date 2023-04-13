<?php
include ('model.php');


if(isset($_GET['updateid'])){

$users= new model();

$id=$_GET['updateid'];

$data= $users->viewDataById($id);

if(isset($_POST['update'])){

    $users->updateData($_POST);
    
    header("Location:page2.php?msg=update");
}

}
/*$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

$id=$_GET['updateid'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);
$name =$resultData['username'];
$email =$resultData['email'];
$password =$resultData['password'];
$gender =$resultData['gender'];

/*
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
*/

    ?>
    

<html>
    <head lang="eng">
        <meta charset="utf-8">
        <title>update page</title>
        <link rel="stylesheet" href="style_crud.css" type="text/css"/>
       
    </head>
    <body>
        <h2 class="h2">Update Data</h2>
        
        

        <form name="register" action="" method="POST">
            <fieldset >
                <legend>Personal INFO</legend>
                <br>
                <label>Username</label>
                <input type="text" name="username" placeholder="type ur name" value="<?php echo $data['username']?>">
                <label>E-mail</label>
                <input type="text" name="email"placeholder="type ur e-mail"value="<?php echo $data['email']?>"> 
                <label>password</label>
                <input type="password" name="password" placeholder="type ur password"value="<?php echo $data['password']?>">
                <label>repeat password</label>
                <input type="password" name="repassword" placeholder="repeat ur password"value="<?php echo $data['password']?>">
                
                <label>Gender</label>
                <select name="gender"value="<?php echo $data['gender']?>">
                    <option value="male" name="gender">male</option>
                    <option value="female" name="gender">famele</option>
                </select>
                <input type="checkbox"  class="checkbox" checked>Remember Me
                <br>
                <input type="submit" value="update" name="update" class="sign">
                <input type="hidden" value="<?php echo $data['id'];?>" name="updateid" >


            </fieldset>

        

    </body>






</html>