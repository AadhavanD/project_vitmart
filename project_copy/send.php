<?php

include 'db_conn.php';

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['regno']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['c_pass'])){
        include 'db_conn.php';
    
        $regno = validate($_POST['regno']);
        $email = validate($_POST['email']);
        $pass = validate($_POST['pass']);
        $c_pass = validate($_POST['c_pass']);
    
        if (empty($regno) || empty($email) || empty($pass) || empty($c_pass)) {
            header("Location: index.php");
            exit();
        } else {
            $sql = "INSERT INTO test(regno,email,pass,c_pass) VALUES('$regno','$email','$pass','$c_pass')";
            $res = mysqli_query($conn, $sql);
    
            if($res) {
                echo "<script>alert('Account created successfully'); window.location.href='index.php';</script>";
                exit();
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='index.php';</script>";
                exit();
            }
        }
    } elseif (isset($_POST['email']) && isset($_POST['pass'])) {
        // User login
        $email = validate($_POST['email']);
        $pass = validate($_POST['pass']);

        if (empty($email) || empty($pass)) {
            echo "empty"; // Indicate that both email and password are required
            exit();
        } else {
            $sql = "SELECT * FROM test WHERE email='$email' AND pass='$pass'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) == 1) {
                echo "success"; // Indicate successful login
                exit();
            } else {
                echo "invalid"; // Indicate invalid email or password
                exit();
            }
        }
    } else {
        echo "invalid_request"; // Indicate invalid request
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

?>
