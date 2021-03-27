<?php
session_start();
include('dbconnect.php');
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $city=$_POST['city'];
    $sex=$_POST['sex'];
    $dob=$_POST['dob'];
    $file=$_FILES['upload']['tmp_name'];
$duplicate=mysqli_query($conn,"SELECT * FROM `signup_sign` WHERE Email='$email'");
if(mysqli_num_rows($duplicate)>0){
    echo "<script>document.getElementById('Signup_input_arrea').style.marginLeft='1px';
                document.getElementById('alert').innerHTML='Email address allready exist Please try another email';
            </script>";
}else{
$Sinned=mysqli_query($conn,"INSERT INTO `signup_sign`(Name,Email,Password,City,Sex,Date_Birth,Upload_ID)
values('$name','$email','$password','$city','$sex','$dob','$file')");
if($Sinned){
    echo "<script>document.getElementById('Signup_input_arrea').style.marginLeft='1px';
                I.value='Submited';
                document.getElementById('alert').innerHTML='Your registration has been Successfully';
                document.getElementById('alert').style.color='green';
            </script>";

include('messageSent.php');
   
}else{
    echo "";
}
}
}
?>
<!-- SECOND OPERATION USIGN AND CREATING DATABASE FILE UPLAODING -->
<?php
if(isset($_POST['signup'])){
    $file_name=$_FILES['upload']['name'];
    $file_type=$_FILES['upload']['type'];
    $file_size=$_FILES['upload']['size'];
    $file_emp=$_FILES['upload']['tmp_name'];
    $file_store ="../Uploaded_ID/".$file_name;
    if(move_uploaded_file($file_emp,$file_store)){
        echo "<script>document.getElementById('Signup_input_arrea').style.marginLeft='1px';
                btn_upload.value='Uploaded';
                document.getElementById('upload_message').innerHTML='You ID Uploaded Successfully';
            </script>";
    }else{
        echo "<script>document.getElementById('Signup_input_arrea').style.marginLeft='1px';
                document.getElementById('upload_message').innerHTML='Sorry ID is not uploaded';
            </script>";
    }
}
?>
	  
		 