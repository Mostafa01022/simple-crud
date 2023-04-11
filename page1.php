<?php

$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));


if(isset($_POST['sign'])){

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
        $results=$mysqli->query("INSERT INTO users (username,email,password,gender) VALUES ('$name','$email','$password','$gender')");
    
        header("Location:page2.php");

    }
    }
    ?>
    

<html>
    <head lang="eng">
        <meta charset="utf-8">
        <title>signup page</title>
        <link rel="stylesheet" href="style_crud.css" type="text/css"/>
       
    </head>
    <body>
        <h2 class="h2"> Sign up </h2>
        
        <H2><a href="page2.php">RESULTS</a></H2>

        <hr>
        <form name="register" action="" method="POST">
            <fieldset >
                <legend>Personal INFO</legend>
                <br>
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username">
                <label>E-mail</label>
                <input type="text" name="email"placeholder="Enter e-mail"> 
                <label>password</label>
                <input type="password" name="password" placeholder="Enter password">
                <label>repeat password</label>
                <input type="password" name="repassword" placeholder="Repeat password">
                
                <label>Gender</label>
                <select name="gender">
                    <option value="male" name="gender">male</option>
                    <option value="female" name="gender">famele</option>
                </select>
                <input type="checkbox"  class="checkbox">Remember Me
                <br>
                <input type="submit" value="sign" name="sign" class="sign">


            </fieldset>

        </form>

    </body>






</html>