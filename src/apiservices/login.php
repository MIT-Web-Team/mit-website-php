<?php
session_start();

function get_env_variables() {
    $lines = file('../../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);
        $env[$name] = $value;
    }
    return $env;
}

$env = get_env_variables();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["email"];
    $input_password = $_POST["password"];

    $host = $env['DB_HOST'];
    $dbname = $env['DB_NAME'];
    $user = $env['DB_USER'];
    $password = $env['DB_PASSWORD'];

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

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
