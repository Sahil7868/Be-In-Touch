<?php 

if(isset($_POST["add"]))
{
	SESSION_start();
	
	$busid=$_SESSION["busid"];
	$email=$_SESSION["email"];
	$dat=$_SESSION["date"];
	$name=$_POST["n"];
	$cardnum=$_POST["no"];
	$tc=$_POST["php1"];
	$amt=$_POST["pass"];
	$cvv=$_POST["cvv"];
	$date=date('y-m-d');
	$amt="2500";
	$status="pending";
	$sat="booked";
	
$con=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con);
$res=mysql_query("insert into payment_table values('null','$cardnum','$amt','$name','$tc','$cvv','$email','$date','$status')",$con);	
	

$con1=mysql_connect('localhost','root','');
mysql_select_db('bapa',$con1);	
$res1=mysql_query("update bus_customer_tbl set status='$sat' where fk_email_id='$email' and fk_bus_id='$busid' ",$con1);

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";

$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 10);
$captcha_code="demo1.brainoorja.com/x.php?id=".$captcha_code;

$message = "Your Booking has been done successfully on  ".$dat;
        
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
$mail->Subject = '  successfully booked  ';

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
	header('location:bususer.php');

	//echo $msg;
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
	echo $msg.'in 1';
} catch (Exception $e) {
    $msg = $e->getMessage();
	echo $msg.'in 2';
}





}					

?>