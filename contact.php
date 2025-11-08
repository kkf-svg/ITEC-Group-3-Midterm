<?php
//enhanced php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //initialize variables and errors
    $errors = [];
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    //server side validaiton
    if (empty($name) || strlen($name) < 2) {
        $errors[] = "Name must be at least 2 characters long";
    }

    //email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address";
    }

    //subject
    if (empty($subject) || strlen($subject) < 5) {
        $errors[] = "Subject must be at least 5 characters long";
    }

    //message
    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters long";
    }

    //if theres no errors then process the form
    if (empty($errors)) {
        //here is where we input our auto-reply
        $autoReplyMessage = "Thank you for contacting Campus Club! We have received your message and will get back to you within 24 hours.";

        displayConfirmationPage($name, $subject, $autoReplyMessage);
    } else {
        displayErrorPage($errors);
    }
    } else {
    //redirect
    header("Location: contact.html");
    exit();
    }

    function displayConfirmationPage($name, $subject, $autoReplyMessage) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Thank You - Campus Club</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <nav>
            <div class='nav-container'>
                <h1>Campus Club</h1>
                <ul>
                    <li><a href='index.html'>Home</a></li>
                    <li><a href='events.html'>Events</a></li>
                    <li><a href='contact.html'>Contact</a></li>
                </ul>
            </div>
        </nav>

        <main class='container'>
            <div class='confirmation-message success'>
                <h2>✓ Message Sent Successfully!</h2>
                <p>Thank you, <strong>$name</strong>! We have received your message.</p>
                <p><strong>Subject:</strong> $subject</p>
                <div class='auto-reply'>
                    <h3>Auto-Reply Confirmation:</h3>
                    <p>$autoReplyMessage</p>
                </div>
                <div class='button-group'>
                    <a href='contact.html' class='btn'>Send Another Message</a>
                    <a href='index.html' class='btn btn-secondary'>Back to Home</a>
                </div>
            </div>
        </main>

        <footer>
            <p>&copy; 2025 Campus Club. All rights reserved.</p>
        </footer>
    </body>
    </html>";
}

function displayErrorPage($errors) {
    $errorLsit
}
?>