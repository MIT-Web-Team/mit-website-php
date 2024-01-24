<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    $host = '';  
    $dbname = '';  
    $user = ''; 
    $password = '';

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    try {

        $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
        $stmt->bind_param('s', $input_username);
        $stmt->execute();
        $result = $stmt->get_result();
        $admin = $result->fetch_assoc();

        if ($admin && password_verify($input_password, $admin['password'])) {
            $_SESSION["admin_logged_in"] = true;
            header("Location: index.php"); 
            exit();
        } else {
            $error_message = "Invalid username or password";
            header("Location: index.php"); 
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    } finally {

        $stmt->close();
        $conn->close();
    }
}
?>
