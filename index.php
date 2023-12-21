

<?php
$FirstName=$_REQUEST['First Name'];
$lastName=$_REQUEST['Last Name'];
$email=$_REQUEST['Email'];
$number=$_REQUEST['number'];
$date=$_REQUEST['DATE'];
$message=$_REQUEST['Message'];


if(isset($_post['login']))
{
  $host="localhost";
  $user="root";
  $password="";
  $db="customer_information";

  $coon =mysqli_connect($host,$user,$password,$db);
  
  $insert="insert into customer_info values('$FirstName','$lastName','$email','$number','$date','$message')";
  $mysqli_query($conn,$insert);
  

  if($conn){
    echo("<h1 style ='color:green;'> Your Registration is Done !</h1>");
  }
  else{
    echo("<h1 style= 'color:red;'> Your Registration is Failed !</h1>");
  }

}

?>



