<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $to='hello@appbylogic.com';
        $subject='Contact form submission';
        $message = 'Name:'.$name."\n".'Email:'.$email."\n".'Phone:'.$phone."\n".'Message:'.$message;
        $headers = 'From:'.$email;

        if(mail($to, $subject, $message, $headers)){
            echo "Message Sent Successfully !!";
        }

        else{
            echo"Something went wrong, Please try again later";
        }
?>