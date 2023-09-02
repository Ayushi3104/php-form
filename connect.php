<?php

$FullName = $_POST['FullName'];
$PhoneNo = $_POST['PhoneNo'];
$Email = $_POST['Email'];
$Subject= $_POST['Subject'];
$Message = $_POST['Message'];

//after creating a database 

<?php 
$conn = mysqli_connect("localhost" , "root" , " " , "HTML_Form");

sql= "INSERT INTO HTML_Form (FullName , PhoneNo ,  Email , Subject , Message) VALUES ( '$_POST[FullName]' , '$_POST[PhoneNo]' ,  '$_POST[Email]' , '$_POST[Subject]' , '$_POST[Message]')";


mysqli_query($conn , $sql);


//then confirming and also displying the  error message 

