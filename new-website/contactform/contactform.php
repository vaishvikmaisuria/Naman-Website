<?php
    echo "Fuck man";
    echo $_POST['submit'];
    if (isset($_POST['submit'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = 'Contact Request From Naman Website' . $_REQUEST['subject'];
        $message = $_REQUEST['message'];

        // Set your email address where you want to receive emails. 
        $to = 'namanelectric@yahoo.com';
        $headers = "From: ".$name." <".$email."> \r\n";
        $send_email = mail($to,$subject,$message,$headers);

        echo ($send_email) ? 'success' : 'error';
    }
?> 
