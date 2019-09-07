<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $methodOfPayment = $_POST['methodOfPayment'];

        $subject = "New Order from missfebruarycloset.com";
        $mailTo = "bitancor@ualberta.ca";
        $headers = "From: ".$email;
        $email_body = "Name: $name.\n".
                      "Email: $email.\n".
                      "Address: $address.\n".
                      "Contact Number: $contact_number.\n".
                      "Method of Payment: $methodOfPayment.\n".

        mail($mailTo, $subject, $email_body, $headers);
    }
