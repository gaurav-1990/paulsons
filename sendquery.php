<?php

define("BASEURL", "http://".$_SERVER['SERVER_NAME'] . ":8080/paulsons/");
 
if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contact']) && !empty($_POST['contact'])) {

    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $user_email = isset($_POST['email']) ? $_POST['email'] : "";
    $contact = isset($_POST['contact']) ? $_POST['contact'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";



    $to = 'hello@paulsonsonline.com';
//    $to = 'dev@nibblesoftware.com';

    $subject = "Newsletter Query" . " -" . time();

    $message = '<html><body>';

    $message .= " <br> Newsletter Signup Query<br><br>";

    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10" cellspacing="10" border="1">';
    $message .= "<tr style='background: #eee;'><td><strong>Contact Number</strong> </td><td>" . "$contact" . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td><strong>Name</strong> </td><td>" . "$name" . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td><strong>  Email </strong> </td><td>" . "$user_email " . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td><strong>  Message </strong> </td><td>" . "$message " . "</td></tr>";
    $message .= "</table><br><br>";
    $message .= "</body></html>";
    $email_from = $name . '<' . $user_email . '>';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=windows-1254" . "\r\n";
    $headers .= 'From: ' . $email_from . "\r\n";
    $headers .= 'Reply-To: ' . $user_email . "\r\n";
    $headers .= 'Bcc: nibbleppc@gmail.com' . "\r\n";


    if ($contact != '' && $user_email != '') {
        mail($to, $subject, $message, $headers);
 
        echo "<script type='text/javascript'>";
        echo "alert('Thanks! You can also visit our exclusive stores in Faridabad & Rohtak ')";
        echo "</script>";

        echo "<script type='text/javascript'>";
        echo "window.location.href = '" . BASEURL . "'";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Error!! Please try again ')";
        echo "</script>";

        echo "<script type='text/javascript'>";
        echo "window.location.href = '" . BASEURL . "'";
        echo "</script>";
    }
} else {
    echo "<script type='text/javascript'>";
    echo "window.location.href = '" . BASEURL . "'";
    echo "</script>";
}
?>