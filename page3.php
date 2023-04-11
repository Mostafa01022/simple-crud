<?php

$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

$id=$_GET['updateid'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);
$name =$resultData['username'];
$email =$resultData['email'];
$password =$resultData['password'];
$gender =$resultData['gender'];


    ?>
    

<html>
    <head lang="eng">
        <meta charset="utf-8">
        <title>update page</title>
        <link rel="stylesheet" href="style_crud.css" type="text/css"/>
       
    </head>
    <body>
        <h2 class="h2">Update Data</h2>
        
        

        <form name="register" action="update.php" method="POST">
            <fieldset >
                <legend>Personal INFO</legend>
                <br>
                <label>Username</label>
                <input type="text" name="username" placeholder="type ur name" value="<?php echo $name?>">
                <label>E-mail</label>
                <input type="text" name="email"placeholder="type ur e-mail"value="<?php echo $email?>"> 
                <label>password</label>
                <input type="password" name="password" placeholder="type ur password"value="<?php echo $password?>">
                <label>repeat password</label>
                <input type="password" name="repassword" placeholder="repeat ur password"value="<?php echo $password?>">
                
                <label>Gender</label>
                <select name="gender"value="<?php echo $gender?>">
                    <option value="male" name="gender">male</option>
                    <option value="female" name="gender">famele</option>
                </select>
                <input type="checkbox"  class="checkbox" check="checked">Remember Me
                <br>
                <input type="submit" value="update" name="update" class="sign">
                <input type="hidden" value="<?php echo $id?>" name="id" >


            </fieldset>

        

    </body>






</html>