<?php 
    if(isset($_POST['submit'])){
        $Name=$_POST['name'];
        $Email=$_POST['email'];
        $number=$_POST['number'];
        
        $message=$_POST['msg'];
        
        $to='ssatapathy000@gmail.com';
        $subject='Form Submission';
        $message="name: ".$name."\n".
                 "email: ".$email."\n".
                 "tel: ".$number."\n".
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