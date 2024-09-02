<?php
$dbname = "starbucks";
$username = "Starbucks";
$password = "Starbucks";
$servername = "localhost";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $confirm_password = $_POST['confirm_password'];
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    if ($pass === $confirm_password) {     
        $stmt = $conn->prepare("INSERT INTO authuser (Name, Email, Password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss" ,$user, $email  ,$hashed_password);
        if ($stmt->execute()) {
            echo "New user registered successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Please enter the correct password";
    }
}
$conn->close();
?>
