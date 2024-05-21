<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $_SESSION['msg'] = "Message sent successfully";
    } else {
        $_SESSION['msg'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: index.php");  // Make sure your main file is index.php
    exit();
}
?>
