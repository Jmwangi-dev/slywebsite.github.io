<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'josemwas1627@gmail.com';
        $mail->Password = 'bvztggloizmchqyf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->addAddress('josemwas1627@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'Message Received from contact form:' . $name;
        $mail->Body = "Name: $name <br>Email: $email<br>Message: $message";

        $mail->send();
    } catch (Exception $e) {
        $alert = "<div class='alert-error'><span>" . $e->getMessage() . "</span></div>";
    }
}
?>


