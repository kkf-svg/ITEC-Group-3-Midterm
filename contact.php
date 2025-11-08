<?php
// Prevent direct access without form submission
if (empty($_POST) && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: contact.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    echo "<h2>Thank You, $name!</h2>";
    echo "<p>We have received your message and will get back to you soon.</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "<p><a href='contact.html'>Send another message</a></p>";
}
?>