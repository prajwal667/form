<?php
$con=mysqli_connect("localhost","root","","contactform") or die(mysqli_error($con));
$name=mysqli_real_escape_string($con,$_POST['name']);
$last_name=mysqli_real_escape_string($con,$_POST['lastname']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$sub=mysqli_real_escape_string($con,$_POST['subject']);
$contact_form_query="insert into userinfo(name,lastname,email,subject) values('$name','$last_name','$email','$sub')"; 
//die($contact_form_query);
$user_submit=mysqli_query($con,$contact_form_query) or die(mysqli_error($con));
echo "<html>";
echo "<head>";
echo "<title>Users</title>";
     echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
     ";
      echo " <meta name=viewport content='width=device-width, initial-scale=1'>";
      echo "</head>";
      echo "<body>";
echo " <div class=jumbotron jumbotron-fluid'>";
echo "<div class='container'>";
echo " <h1>Successfully submitted</h1>";
echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
