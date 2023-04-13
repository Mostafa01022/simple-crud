<?php

class model{

    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'crud';
    private $conn;

    // function define db connection

    function __construct(){
        $this->conn = new mysqli($this->servername,$this->username,
        $this->password,$this->dbname);

        if($this->conn->connect_error){
            echo "connection failed";
        }else{
          // echo "connected";
          return $this->conn;
        }
    }

    // funtion to insert data

   public function insertData ($post){
       // echo "data inserted";
        $name   = $post['username'];
        $email   = $post['email'];
        $password   = $post['password'];
        $gender   = $post['gender'];
        
        $result = $this->conn->query("INSERT INTO users (username,email,password,gender)
         VALUES ('$name','$email','$password','$gender')");
        if($result){
            header("Location:page2.php?msg=ins");
        }else{
        echo "Failed to insert";
        }
    }

    // function to view data

    public function viewData(){
        $result = $this->conn->query("SELECT*FROM users ORDER BY id asc");
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    // function to delete data

    public function deleteData($deleteid){
        $result = $this->conn->query(" DELETE FROM users WHERE id = $deleteid");

        if($result){
            header("Location:page2.php?msg=del");
        }else{
            echo "failed to delete";
            header("Location:page2.php");
        }
    }

    // function to update

    public function viewDataById($updateid){
        $result = $this->conn->query("SELECT * FROM users WHERE id =$updateid");
        if($result->num_rows>0){
            $row = $result->fetch_assoc();
            return $row ;
        }
    }


    public function updateData($post){

         $name   = $post['username'];
         $email   = $post['email'];
         $password   = $post['password'];
         $gender   = $post['gender'];
         $id   = $post['updateid'];
         
         $result = $this->conn->query(" UPDATE users SET
             username='$name',
             email='$email',
             password='$password',
             gender='$gender'where id='$id'  ");
          
         if($result){
             header("Location:page2.php?msg=update");
         }else{
         echo "Failed to update";
         }
     }
   
}

   