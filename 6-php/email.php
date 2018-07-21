<?php

    $emailTo = "smithjc529@gmail.com";

    $subject = "test";

    $body = "test email from php";

    $headers = "from: smithjc529@themistore.com";

     if (mail($emailTo, $subject, $body, $headers)) {

     echo "Message sent.";

    } else {

        echo "Failed to send message.";

    }
?>