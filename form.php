<?php 
    $servername = "localhost";
    $username = "root";
    $userpass = "";
    $dbname = "homepagedb";


    $conn = mysqli_connect($servername, $username, $userpass, $dbname);
    if(!$conn){
        die("Could Not Connect:".mysqli_connect_error());
    }
    else{
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $message = test_input($_POST['message']);

        $sql = "INSERT INTO contact_respond(name, email, message)
        VALUES('$name','$email','$message')";

        if(mysqli_query($conn,$sql)){
            echo "Message Hase Been Send!";
        }
        else{
            echo ("Error description: " .mysqli_error($conn));
        }
        mysqli_close($conn);  
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>