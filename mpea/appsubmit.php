<?php
include "config.php";
session_start();
$userid=$_SESSION['userid'];
if (isset($_POST['app_submit'])) {
     $unitid = mysqli_real_escape_string($con, $_POST['unitid']);
     $apptitle = mysqli_real_escape_string($con, $_POST['apptitle']);
    $pdate1= date('Y-m-d');
     $sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
    if($sourcePath!='')
        $targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored

    move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file

    $sql_query = "select count(*) as cntApp from apps where student_id='" . $userid . "' and app_unit='" . $unitid . "'";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntApp'];
    if ($count > 0) {
        $msg="Application Already Submitted for this unit";
        echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"newsub.php\";</script>";

        //header('Location: newsub.php');
    }

else{


    $sql_query = "INSERT INTO apps( student_id, app_unit, app_title, app_file, app_date, app_status) VALUES ('$userid','$unitid','$apptitle','$targetPath','$pdate1',1)";

    if (mysqli_query($con, $sql_query)) {

ding Email
    //$emailto="preewishali@gmail.com"; 
    $emailto=$_SESSION['user_email'];
    $subject = 'Application Submission';
    $message = 'tett test';
    // send email
        $cont='text/html; charset=UTF-8';
        $from = "The Team <support@rgu.ac.uk>";
        $to = $emailto;
        $subject = $subject;
        $body = $message;
        $host = "mail.xyz.com";                         // Enter Hosting Mail Server
        $username = "test@xyz.com";                     // Enter Email Address
        $password = "test";                     // Enter Email password
        $headers = array ('From' => $from,
          'To' => $to,
          'Subject' => $subject,
        'Content-Type'=> $cont);
        $smtp = Mail::factory('smtp',
          array ('host' => $host,
            'auth' => true,
            'username' => $username,
            'password' => $password));
        $mail = $smtp->send($to, $headers, $body); 
//Sending Email 



   
       $msg="Application Submitted Successfully";
        echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"submissions.php\";</script>";
    }
    else {
        $msg="Error... Try Again";
        echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"submissions.php\";</script>";
   }
}
}
