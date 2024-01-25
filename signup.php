<?php
 if(isset($_POST["save"]))
 {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $password1=$_POST['password1'];

    $con=mysqli_connect("localhost","root","","logsindb");
    $ins="INSERT INTO user SET fullname='$name', email='$email',pass='$password',re_pass='$password1'";
    $con->query($ins);
 
    echo '<script>
   window.location.href="welcome.php";
   alert("Welcome");
</script>';
 }
?>
