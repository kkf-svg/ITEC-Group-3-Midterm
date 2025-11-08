<?php
//enhance in sprint 2
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    //no actual email sending yet
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
            <div class='confirmation-message'>
                <h2>Thank You, $name!</h2>
                <p>We have received your message and will get back to you soon.</p>
                <p><strong>Subject:</strong> $subject</p>
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
} else {
    //if they access directly then redirect to the form
    header("Location: contact.html");
    exit();
}
?>