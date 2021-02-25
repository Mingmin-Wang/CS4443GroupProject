<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","users");

if(!$connect) {
    echo 'Not connected to server!';
}

$Namef = "$_POST[first]";
$Namel = "$_POST[last]";
$Email = "$_POST[email]";
$Pass = "$_POST[pwd]";

mysqli_select_db($connect, "users");

$sql = "INSERT INTO users (fname,lname,email,password) VALUES
('$Namef' , '$Namel' , '$Email' , '$Pass')";


if(mysqli_query($connect,$sql)) 
{    echo 'Account created!';
} else 
{   die (mysqli_error($connect));
}
?>