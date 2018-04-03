<?php 


	
	$id=$_REQUEST["id"];
	
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("select * from car_customer_table where cust_id='$id'",$con);
	while($row=mysql_fetch_assoc($res))
	{
		$email=$row["fk_email_id"];
		$dat=$row["date"];
		$carname=$row["car_name"];
	}

	


				
					
					
	//from here phpmailer starts				
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";

$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 10);
$captcha_code="demo1.brainoorja.com/x.php?id=".$captcha_code;

$message = "This is the reminder mail from Shreeji Travels that you have booked ".$carname." to travel on  ".$dat;
        
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'maildemo254@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'maildemo1234';

// add a subject line
$mail->Subject = 'Reminder from Shreeji Travels';

// Sender email address and name
$mail->SetFrom('sahilsurani84@yahoo.in', 'Shreeji Travels');

//$email1=$_POST["txtemail"];
// reciever address, person you want to send
$mail->AddAddress($email);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	
    $mail->Send();
   // $msg = "Mail send successfully";
	header('location:carcustdis.php');
	echo'Reminder send successfully';

	//echo $msg;
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
	echo $msg.'in 1';
} catch (Exception $e) {
    $msg = $e->getMessage();
	echo $msg.'in 2';
}



?>