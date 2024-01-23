<?php
include("connection.php");

if(isset($_POST['submit'])){
    $Username = $_POST['userName'];
    $password = $_POST['pass'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM hello WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $Username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    $count = mysqli_num_rows($result);

    if($count == 1){
        header("Location: index.html");
        exit(); // Make sure to exit after sending the Location header
    }
    else{
        echo '<script>
                alert("Login Failed. Invalid username or password !!!");
                window.location.href = "index.php";
              </script>';
    }
}

