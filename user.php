<?php

$conn= new mysqli('localhost','root','','store');

$title=$_POST['title'];
$first=$_POST['first'];
$mi=$_POST['mi'];
$last=$_POST['last'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$address3=$_POST['address3'];
$city=$_POST['city'];
$state=$_POST['state'];
$postal=$_POST['postal'];
$province=$_POST['province'];
$vender=$_POST['vender'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$dail=$_POST['dail'];
$altp=$_POST['altp'];
$Shw=$_POST['Shw'];
$email=$_POST['email'];
$comment=$_POST['comments'];

$sql="INSERT INTO admin (title,first,mi,last,address1,address2,address3,city,state,postal,province,vender, gender,phone,dail,altp,Shw,email,comment)
Values('$title','$first','$mi','$last','$address1','$address2','$address3','$state','$postal','$province','$vender','$gender','$phone','$dail','$altp','$Shw','$email','$comment')";




if($conn->query($sql))
{
    echo "user data has been inserted";
}
 
else 
{
    echo "failed to insert";
}
$conn->close();
?>