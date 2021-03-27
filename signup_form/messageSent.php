<?php
$html="
<div style='width:100%; height:434px; background:khaki; position:fixed; top:0; left:0;'>
<h1 style='text-align:center; color:blue; padding-top:15px; width:100%; background:silver; padding-bottom:13px;'>Modassir</h1>

<span style='font-size:18px; color:purple;margin-left:10px; margin-bottom:10px;'>Your form submiting Successfully?</span><br><br>

<span style='font-size:16px; margin-left:10px; margin-bottom:2px;'>Your Name:<span style='color:blue; margin-left:4px;'>$name</span><div>

<span style='font-size:16px; margin-left:10px; margin-bottom:2px;'>Email:<span style='color:blue; margin-left:10px;'>$email</span><br>

<span style='font-size:16px; margin-left:10px; margin-bottom:2px;'>Password:<span style='color:blue; margin-left:9px;'>$password</span>
</span>
<br>
<span style='font-size:16px; margin-left:10px; margin-bottom:2px;'>Your City:<span style='color:blue; margin-left:17px;'>$city</span>
</span><br>

<span style='font-size:16px; margin-left:10px; margin-bottom:2px;'>Gender:<span style='color:blue; margin-left:19px;'>$sex</span>
</span><br>

<span style='font-size:16px; margin-left:10px; margin-bottom:2px;'>Your Birth:<span style='color:blue;  margin-left:10px;'>$dob</span>
</span><br><br>

<p style='margin-left:10px; margin-top:10px;'>
See more: <a href='http://localhost/' style='font-size:15px;'>https://mdsriluj.com/1.4.3/mdsrjuli.css</a></p>
<p style='margin-left:10px; margin-top:10px;'>Help: <a href='mmodassir95@gmail.com' style='font-size:15px;'>mmodassir95@gmail.com</a></p>
<div>";

include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="mdtalhaking786@gmail.com";
	$mail->Password="123mdsr123";
	$mail->SetFrom($email);
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject="Modassir Programmer";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
	  echo "<script>
                alert('');
            </script>";
	}