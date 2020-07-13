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

<!doctype html>
<html>
    <article id="contact">
        <h2 class="major">Contact Us</h2>
        <form method="post" action=”contactform.php”>
            <div class="fields">
                <div class="field half">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4"></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Send Message" class="primary" /></li>
                <li><input type="reset" value="Reset" /></li>
            </ul>
        </form>
        <ul class="icons">
            <li><a href="https://www.linkedin.com/in/jeanlucboulnois/" target="_blank" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <!-- <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li> -->
        </ul>

        <span class="tile-list">
            <nav>
                <ul>
                    <li><a href="#mission">Mission</a></li>
                    <li><a href="#about-us">About Us</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#case-studies">Case Studies</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <!--<li><a href="#elements">Elements</a></li>-->
                </ul>
            </nav>
        </span>
    </article>
</html>