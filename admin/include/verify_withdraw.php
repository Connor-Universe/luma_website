<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;
require '../../phpmailer/vendor/autoload.php';
include '../../include/config.php';
$id=$_GET['id'];
$amount = $_GET['amount'];
$id_no = $_GET['no'];
$wallet = $_GET['wallet'];
$name = $_GET['name'];
$email_user = $_GET['email'];
$reference = $_GET['reference'];
$coin = $_GET['coin'];
$delete = "UPDATE withdraw_request SET verified = 1 WHERE id= $id";
$run = mysqli_query($connect,$delete);
$result = $run;
$withdraw = "INSERT INTO withdraws (amount,id_no) VALUES('$amount','$id_no')";
$run_withdraw = mysqli_query($connect,$withdraw);

date_default_timezone_set('Etc/UTC');


  
        
//Create a new PHPMailer instance

$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.privateemail.com';  // Specify main and backup SMTP servers
//$mail->SMTPDebug  = 2;    
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $email_admin1;                 // SMTP username
$mail->Password = $password_admin1;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;      
$mail->SMTPOptions = array(
  'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
  )
  );


//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;
$mail->setFrom($email_admin1,$last_name);
$mail->From = $email_admin1;
$mail->addCC($email_admin1);
$mail->addBCC($email_admin1);

$mail->AddEmbeddedImage('../../assets/favicons/apple-touch-icon.png', 'logo', '../../assets/favicons/apple-touch-icon.png '); 

//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as

//Set who the message is to be sent to
$mail->addAddress($email_user);

//Set the subject line
$mail->Subject = 'Withdrawal Notice:'.$name;

//Read an HTML message rody from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->isHTML(true);
$mail->CharSet = PHPMailer::CHARSET_UTF8;


//Replace the plain text body with one created manually
$mail->Body="<p>
Dear $name </p> 
<p>
Your request to withdraw has been approved. The sum of $$amount has been sent to your bitcoin wallet $wallet your Transaction ID is $reference your coin is $coin Thank you for investing with Us. </p>
<p> We anticipate more investments and referrals from you</p> 
<b>Regards</b>
<br> 
<b>$site_name3</b>";


//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
 
    $fail = 'Message not sent, try again later'; 
} else {

    $success = 'Message has sent,thank you ';
}
      
$update_total = "UPDATE investments SET amount = '$total' , complete = $complete where reference = $reference";
$run_total = mysqli_query($connect,$update_total);
$sum_total = "SELECT SUM(amount) AS value_sum FROM investments where id_no = $id_no";
$run_sum_total = mysqli_query($connect,$sum_total);
$fetch_sum = mysqli_fetch_assoc($run_sum_total);
$sum_withdraw = "SELECT SUM(amount) AS value_withdraw FROM withdraws where id_no = $id_no";
$run_withdraw = mysqli_query($connect,$sum_withdraw);
$fetch_withdraw = mysqli_fetch_assoc($run_withdraw);
$get_bonus = "SELECT SUM(amount) AS value_bonus FROM bonus where id_no = $id_no";
$run_bonus = mysqli_query($connect,$get_bonus);
$fetch_bonus = mysqli_fetch_assoc($run_bonus);
$get_referal = "SELECT SUM(amount) AS value_referal FROM referals where id_no = $id_no";
$run_referal = mysqli_query($connect,$get_referal);
$fetch_referal = mysqli_fetch_assoc($run_referal);
$get_penalty = "SELECT SUM(amount) AS value_penalty FROM penalty where id_no = $id_no";
$run_penalty = mysqli_query($connect,$get_penalty);
$fetch_penalty = mysqli_fetch_assoc($run_penalty);
$get_funds = "SELECT SUM(amount) AS value_adds FROM add_funds where id_no = $id_no";
$run_funds = mysqli_query($connect,$get_funds);
$fetch_funds = mysqli_fetch_assoc($run_funds);
$get_remove = "SELECT SUM(amount) AS value_remove FROM remove_funds where id_no = $id_no";
$run_remove = mysqli_query($connect,$get_remove);
$fetch_remove = mysqli_fetch_assoc($run_remove);
$balance1 = $fetch_sum['value_sum'] - $fetch_withdraw['value_withdraw'] + $fetch_funds['value_adds'];
$balance2 =  $fetch_bonus['value_bonus'] - $fetch_penalty['value_penalty'] - $fetch_remove['value_remove'];
$balance3 = $fetch_referal['value_referal'];
$balance = $balance1 + $balance2 + $balance3;
$insert_total = "UPDATE wallet SET amount = $balance where id_no = $id_no";
$run_insert_total = mysqli_query($connect,$insert_total);
header("location:../examples/withdraw-request.php?success=true");

?>