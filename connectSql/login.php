<?php 
    require_once('connection.php');

    if(isset($_POST['submit'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $isDeleted = 0;

        if($password == $confirmPassword) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 

            $query = "INSERT INTO user (firstName, lastName, email, password, isDeleted) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword', $isDeleted)";
            $result = mysqli_query($connection, $query);

            if ($result) {
                echo "User registration successful!";
            } else {
                echo "User registration failed.";
            }
        } else {
            echo "Passwords do not match!";
        } 

        mysqli_close($connection);
    }
?>
