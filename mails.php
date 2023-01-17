<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone_number'];

$message="<h1>Google Adwords</h1><h3>Person name:</h3>$name\r\n<br/><h3>E-Mail:</h3>$email\r\n<br/><h3>Mobile Number:</h3> $phone\r\n<br/>";
$subject="Contact from: $email";
$to="ramu.r@metamorphsystems.com, marathon.mohan@gmail.com";

$num = md5(time());

		$headers = "From: marathon.mohan@gmail.com\r\n";

   		$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
     	$headers .= "Content-Transfer-Encoding: 8bit\r\n";
   		//$headers .= "".$message."\n";
      	//$headers .= "--".$num."\n";

    $mail_status=mail($to, $subject, $message, $headers)or die ("Failure");
	   
   if ($mail_status)
   {
?>
    	<script language="javascript" type="text/javascript">
       // alert('Your form has been Submitted. We will contact you soon.');
        window.location = 'http://marathoninternational.co.in/';
    	</script>

    
<?php
header("location:thank-you.html"); 
}
}
?>


