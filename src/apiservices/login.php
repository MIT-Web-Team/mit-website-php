<?php
session_start();

require 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["email"];
    $input_password = $_POST["password"];

    try {
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param('s', $input_username);
        $stmt->execute();
        $result = $stmt->get_result();
        $admin = $result->fetch_assoc();

        if ($admin && password_verify($input_password, $admin['password'])) {
            $_SESSION["admin_logged_in"] = true;
            header("Location: /admin"); 
            exit();
        } else {
            $error_message = "Invalid username or password";
            header("Location: /"); 
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    } finally {
        $stmt->close();
        $conn->close();
    }
}
?>