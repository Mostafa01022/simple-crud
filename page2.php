<?php
// Include the database connection file
//$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
include ('model.php');

$users= new model();

//$select = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id asc");
$data= $users->viewData();
// print_r($data); assoc array


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
<br>
<?php
    if(isset($_GET['msg']) and $_GET['msg']== 'ins'){
        echo "data insertd";
    }
    if(isset($_GET['msg']) and $_GET['msg']== 'del'){
        echo "data deleted";
    }
    if(isset($_GET['msg']) and $_GET['msg']== 'update'){
        echo "data updated";
    }
?>
<br>
<br>
<br>
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
		/*
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
        }*/

        foreach($data as $value){
        ?>
        <tr>
          <td><?php echo $value['id']?></td>
          <td><?php echo $value['username']?></td>
          <td><?php echo $value['email']?></td>
          <td><?php echo $value['password']?></td>
          <td><?php echo $value['gender']?></td>
          <td><button class="update"><a class="link" name ="update"href="update.php?updateid=<?php echo $value['id']?>">Update</a></button>
              <button class="delete" name="delete"><a  class="link" href="delete.php?deleteid=<?php echo $value['id']?>">Delete</a></button> 
          </td>
        </tr>  
           <?php
        }
		?>

	

</body>
</html>