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
        $txt = "Order ".$name.".\n\n".$email.".\n\n".$address.".\n\n".$contact_number.".\n\n".$methodOfPayment.".\n\n";

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }
