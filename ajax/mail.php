<?php
$sender_email = $_POST['email_address'];
$to = "harshana.eyes.lk@gmail.com,dineshedirisinghe12@gmail.com,groups@fspaceproperty.com";
$from = $sender_email;


$subject = $_POST['company'];
$firstname =  $_POST['first_name'];
$last_name =  $_POST['last_name'];
$address01 =  $_POST['address1'];
$address02 =  $_POST['address2'];
$city =  $_POST['city'];
$state =  $_POST['state'];
$state_other =  $_POST['state_other'];
$zip =  $_POST['zip'];
$country =  $_POST['country'];
$phone =  $_POST['phone'];
$start_date =  $_POST['start_date'];
$end_date =  $_POST['end_date'];
$meeting_attendees =  $_POST['meeting_attendees'];
$number_rooms =  $_POST['number_rooms'];
$number_nights =  $_POST['number_nights'];
$comments =  $_POST['comments'];
 

$message = $subject.""."\n\n"."first name -".$firstname."\n\n"."last name -".$last_name."\n\n"." Address 1 -".$address01."\n\n"."Address 2 -".$address2."\n\n"."city -".$city."\n\n"."state -".$state."\n\n"."state other-".$state_other."\n\n"."Postral code-".$zip."\n\n"."country -".$country."\n\n"."phone -".$phone."\n\n"."start_date".$start_date."\n\n"."End date".$end_date."\n\n"."meeting attendees -".$meeting_attendees."\n\n"."number of rooms-".$number_rooms."\n\n"."number of nights -".$number_nights."\n\n"."Comments - ".$comments."\n\n". $_POST['message'] ;
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
//groups@fspaceproperty.com

?>