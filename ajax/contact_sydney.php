<?php
$sender_email = $_POST['email_address'];
$to = "harshana.eyes.lk@gmail.com,sydney@freespaces.com.au,dineshedirisinghe12@gmail.com";


$from = $sender_email;
$subject = $_POST['full_name'];
$phone=  $_POST['phone'];
$mobile_phone=  $_POST['mobile_phone'];
$comments= $_POST['comments'];

//$message =  $_POST['comments'];


$message = $subject.""."\n\n"."Phon -".$phone."\n\n"."Mobile phone -".$mobile_phone."\n\n"."Messages -".$comments."\n\n". $_POST['message'] ;
$mail = mail($to, $subject, $message, "From: $sender_email");



if ($mail){
	 echo '<script language="javascript">';
                echo 'alert("Message successfully sent")';
                echo '</script>';
		echo "<script>setTimeout(\"location.href = 'http://test.freespaces.com.au';\",1500); </script>";
        }
		else 
		{
                 echo '<script language="javascript">';
                echo 'alert("Fail")';
                echo '</script>';
		}
?>