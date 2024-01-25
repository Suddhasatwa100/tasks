<?php
session_start();
echo" WELCOME ". $_SESSION['uname'];
if($_SESSION['uname']==true)
{
   echo"";
}
else
{
    header("location:login.html");
}
?>
<a href="logout.php">logout</a>

