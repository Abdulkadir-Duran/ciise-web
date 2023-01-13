<?php
$name = $_POST['name'];


$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$nationality = $_POST['nationality'];
$gender= $_POST['gender'];

$message = $_POST['message'];


$email_from = 'info@kaderaliibrahim.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
               "User Phone: $phone.\n".
               
               "User Email: $visitor_email.\n".
              
               "Nationality: $nationality.\n".
               "User  Gender: $gender.\n ".   
    
               "User Message: $message.\n";
               $to = "kader-ali@vip.jiangnan.edu.cn";
               $headers = "From: $email_from \r\n";
               $headers .="Reply-To:$visitor_email\r\n";
            mail($to,$email_subjec,$email_body, $headers  );
            header("Location: index.html ");
                

?>