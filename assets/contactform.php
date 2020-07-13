<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "mike.diaz006@gmail.com";
    $subject = "New Website Contact Form Submission";
    $body = '<html>
                <body>
                    <h2>You have a new message</h2>
                    <hr>
                    <p>Name<br>' .$name. '</p>
                    <p>Email<br>' .$email. '</p>
                    <p>Message<br>' .$message. '</p>
                </body>
            </html>';
    // headers
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers = "Reply-To: ".$email."\r\n";
    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-type: text.html; charset-utf-8";
    // send
    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<br>';
        echo 'Thanks for your outreach. We will respond as soon as we are able.';
    } else {
        echo 'error';
    }
}
?>