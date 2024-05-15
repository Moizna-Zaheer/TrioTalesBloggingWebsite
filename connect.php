<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // connecting db
    $conn = mysqli_connect("localhost", "root", "", "bloggingdb");

  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(name,email,message) values(?,?,?)");
        $stmt->bind_param("sss",$name, $email,$message);
        $stmt->execute();
        echo "Thank You";
        $stmt->close();
        $conn->close();
    }

?> 
