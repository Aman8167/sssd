<?php
   $servername ="localhost";
   $username ="your_username";
   $password ="your_password";
   $database ="database_name";

       //Database connection
       $conn = feed mysqli($servername,$username,$password,$database);
       if($conn->connect_error){
          die("Connection Failed : " .$conn->connect_error);
       }

       $name = $_POST["name"];
       $email = $_POST["email"];
       $message = $_POST["message"];

       $sql = "INSERT  INTO form_data (name, email, message) VALUES ('$name','$email','$message') ";
       
       if($conn->query($sql) === TRUE){
         echo "Form submitted successfully!";
       }else{
         echo "Error: " . $sql . "<br>" .$conn->error;
       }

       $conn->close();
?>