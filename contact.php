<?php
//enhance in sprint 2
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    //no actual email sending yet
    echo "<h2>Thank You, $name!</h2>";
    echo "<p>We have recieved our message and will get back to you soon.</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "<p><a href='contact.html'>Send another message</a></p>";
} else {
    //if they access directly then redirect to the form
    header("Location: contact.html");
    exit();
}
?>    