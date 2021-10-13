<?php
session_start();
include("config.php");


   // define variables and set to empty values
   $username = $password ="";
 $username_err = $password_err= $fail = "";





if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $username = $_POST['username'];
  $password = $_POST['password'];
  
  
  
 //check for unique password 

 
  //the next code is for checking the form data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  
  
  if (empty($_POST["password"])) {
    
     $password_err = "<div class='alert alert-info'>
    <strong>ERROR:</strong> Password is required!
  </div>";
  } 
  
  if (empty($_POST["username"])) {
    
    $username_err = "<div class='alert alert-info'>
    <strong>ERROR:</strong> Username is required!
  </div>";
  } 

  //if validation is satified then create a token for the user 
  
  
             
  if($password_err == "" AND $username_err == "" ){
    $select_user = "select * from settings where admin_username='$username' AND admin_password='$password' ";

    $run_user = mysqli_query($connect,$select_user);

    $row_user = mysqli_fetch_array($run_user);

    $username = $row_user['admin_username'];



    if($row_user == 0){

        $fail = "<div class='alert alert-info'>
        <strong>ERROR:</strong> Either Your Username or Password is incorrect
      </div>";
      
    
    }
    else{
        $_SESSION['username'] = $username;
        echo"<script>alert('You are logged in')</script>";
        echo"<script>window.open('admin/examples/dashboard.php','_self')</script>" ;
    }
   }
}


  

  




        
  

?>