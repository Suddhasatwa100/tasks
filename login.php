<?php
session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $password1=$_POST['password1'];

    $con=mysqli_connect("localhost","root","","logsindb"); //connecting with xaamp database

if(isset($_POST["save"]))
 {
    $ins="INSERT INTO user SET fullname='$name', email='$email',pass='$password',re_pass='$password1'";
    $con->query($ins);
 
    echo '<script>
   window.location.href="welcome.php";
   alert("Welcome to our website!!!");
</script>';
 }

if(isset($_POST['submit']))//login
{
   $sql="select * from user where fullname='$name'and pass='$password'";
   $result=mysqli_query($con,$sql);
   $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count=mysqli_num_rows($result);
   if($count==1)
   {
      $_SESSION['uname']=$name;
    echo '<script>
    window.location.href="welcome.php";
    alert("Login Successfull.Welcome");
    </script>';
   }
   else
   {
    echo '<script>
    window.location.href="login.html";
    alert("Login Failed. Invalid Username or password");
    </script>';
   }
}
?>