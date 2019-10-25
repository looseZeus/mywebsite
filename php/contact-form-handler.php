<?php>
    
    
    
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $POST['comment'];
    $phone = $POST['phone'];
    

    $email_from = ['poudelbr@warhawks.ulm.edu'];

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
        



    $to = "bijay.r.poudel@gmail.com";

    $headers = "From : $email_from \r\n";

    $headers .= "Reply-to: $Visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("contact.html");
?>