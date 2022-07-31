
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="contact";

$conn =mysqli_connect('localhost','root','','contact');

	if(!empty($_POST)){
   
    $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO contact(name,email,subject,message) VALUE ('$name','$email ','$subject ','$message ')";
$result = mysqli_query($conn,$query);
/*if($result==true){
  echo "Record Inserted sucessfully our employee contact as soon as possible";
}else{
  echo "Failes ";
}*/

  }	

?>