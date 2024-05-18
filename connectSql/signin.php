<?php
require_once('connection.php');

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($connection, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        if(password_verify($password, $hashedPassword)) {
            echo '<script>
                    alert("Login successful!");
                    window.location.href = "dashboard.php"; // Redirect to dashboard
                  </script>';
        } else {
            echo '<script>
                    alert("correct password!");
                  </script>';
        }
    } else {
        echo '<script>
                alert("User not found!");
              </script>';
    }

    mysqli_close($connection);
}
?>
