<?php
require 'config.php';

$username = $_POST["name"];
$usercontact = $_POST["contact"];
$useremail = $_POST["email"];
$usermessage = $_POST["message"];

$sql="DELETE FROM details WHERE username='$username'";

if($con->query($sql))
{
    echo "Deleted";
}
else
{
    echo "Not Deleted";
}



?>