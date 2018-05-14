<?php 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        
        $msg=$_POST['msg'];
        
        $to='sspro.creation@gmail.com';
        $subject='Contact me, I am  '.$name.' ';
        $message="name: ".$name."\n".
                 "email: ".$email."\n".
                 "number: ".$number."\n".
            "Wrote the following: "."\n\n".$msg;
        $headers="Form: ".$email;
        
        if(mail($to,$subject, $message, $headers)){
            echo "<h1>Sent successfully"." ".$name.", we ill contact you later</h1>";
            
        }
        else{
            echo "something went wrong";
        }
    }
?>