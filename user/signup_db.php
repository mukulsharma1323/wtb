<?php

if(isset($_POST['submit'])){

    include('db_config.php');
 
    $email = mysqli_real_escape_string($connection, $_POST['email']);  
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $shop_name = mysqli_real_escape_string($connection, $_POST['shop_name']);

    //Error handlers
    if(empty($email) || empty($password) || empty($shop_name)){
      header("Location: signup.php?signup=empty");
      exit();   
    }else{
      //Check if input valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Location: signup.php?signup=invalidemail");
          exit();       
        }else{
            if(!preg_match("/^[a-zA-Z]*$/", $shop_name)){
              header("Location: signup.php?signup=invalid");
              exit();     
            }else{
              $sql="SELECT * FROM users_details WHERE Shop_Name='$shop_name'";
              $result=mysqli_query($connection, $sql);
              $resultcheck = mysqli_num_rows($result);
              if($resultcheck > 0){
                header("Location: signup.php?signup=usertaken");
                exit();
              }
              else{
                //Hashing the password
                $hashedpwd=password_hash($password, PASSWORD_DEFAULT);
                //User Entry to the Database
                $sql = "INSERT INTO users_details (Email,Password,Shop_Name) VALUES ('$email','$hashedpwd','$shop_name');" ;
                mysqli_query($connection, $sql);
                header("Location: index.php?signup=success");
                exit(); 
              }
            }
        }
  }

}else{
  header("Location: signup.php");
  exit();
}
?>
