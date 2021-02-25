<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","feedbackform");

if(!$connect) {
    echo 'Not connected to server!';
}

$Namef = "$_POST[first]";
$Message = "$_POST[message]";


mysqli_select_db($connect, "feedbackform");

$sql = "INSERT INTO feedbackform (name,suggestion) VALUES
('$Namef' , '$Message')";


if(mysqli_query($connect,$sql)) 
{    echo 'Thanks for your feedback!';
} else 
{   die (mysqli_error($connect));
}
?>