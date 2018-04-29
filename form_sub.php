<?php 
    if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $Lastname=$_POST['Lastname'];
        $number=$_POST['phone_no'];
        $Email=$_POST['email'];
        $message=$_POST['message'];
        
        $to='ssatapathy000@gmail.com';
        $subject='Form Submission';
        $message="firstname: ".$firstname."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
        $headers="Form: ".$email;
        
        if(mail($to,$subject, $message, $headers)){
            echo "<h1>Sent successfully"." ".$name.", we ill contact you later</h1>";
            
        }
        else{
            echo "something went wrong";
        }
    }
?>