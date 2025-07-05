<?php
// contact_submit.php
require_once "config/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "✅ Form reached backend<br>";

    // Sanitize and validate input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "❌ All fields are required.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid email address.";
        exit();
    }

    try {
        $db = new Database();
        $conn = $db->connect();
        echo "✅ DB connected<br>";

        $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            echo "✅ Query executed successfully<br>";
            echo "✅ Your message has been sent successfully!";
        } else {
            echo "❌ Failed to save message.";
        }
    } catch (PDOException $e) {
        echo "❌ PDO Error: " . $e->getMessage();
    }
} else {
    echo "❌ Invalid request method.";
}
?>
