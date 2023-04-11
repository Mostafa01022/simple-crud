<?php
// Include the database connection file
$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

$select = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id asc");



?>

<html>
<head>
	<title>results</title>
    <link rel="stylesheet" href="style_crud.css" type="text/css"/>

</head>

<body>

<div  >
    <button><a  href="page1.php"  class="add">Add User</a></button>
</div>
<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>id</strong></td>
			<td><strong>username</strong></td>
			<td><strong>email</strong></td>
			<td><strong>password</strong></td>
			<td><strong>gender</strong></td>
            <td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($select)) {
                $id   = $res['id'];
                $name   = $res['username'];
                $email   = $res['email'];
                $password   = $res['password'];
                $gender   = $res['gender'];


			echo ' <tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td> 
            <td>'.$email.'</td> 
            <td>'.$password.'</td>
            <td>'.$gender.'</td>
            <td><button class="update"><a class="link" name ="update"href="page3.php?updateid='.$id.'">Update</a></button>
            <button class="delete" name="delete"><a  class="link" href="delete.php?deleteid='.$id.'">Delete</a></button> </td>
           
           
            </tr>';
        }
		?>

	

</body>
</html>