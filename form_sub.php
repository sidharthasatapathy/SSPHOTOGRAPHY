<?php 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
       // $Lastname=$_POST['Lastname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $date=$_POST['date'];
        $select=$_POST['select'];
        
        $to='sspro.creation@gmail.com';
        $subject='Date Enquiry/Booking';
        $message="name: ".$name.
            "\n"."phone: ".$phone.
            "\n"."email: ".$email.
            "\n"."address: ".$address.
            "\n"."date: ".$date.
            "\n"."select: ".$select.
            //"\n". "Wrote the following: ".
            "\n\n".$msg;
        $headers="Form: ".$email;
        
        if(mail($to,$subject, $message, $headers)){
            echo "<script>alert('We will contact You  soon. Thank you for ur interest')</script>";
            echo "<h1>Sent successfully"." ".$name.", we ill contact you later</h1>";
            
        }
        else{
            echo "something went wrong";
        }
    }
?>