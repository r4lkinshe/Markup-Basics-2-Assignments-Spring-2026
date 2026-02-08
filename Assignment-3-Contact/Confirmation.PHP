<html>

<body>

Thank you,   

<?php 

echo $_POST["fname"], " ", $_POST["lname"], " for reaching out!";

?>

<br> 

We now have your email address on file as:

<?php 

echo $_POST["email"]; 

?>

<br>

Here is your full profile information: 

<br>

Phone: 

<?php 

echo $_POST["phoneNumber"]; 

?>

<br>

Preferred Contact Method: 

<?php 

echo $_POST["preferredMethod"]; 

?>

<br>Reason for reaching out: <?php 

echo $_POST["reason"]; 

?>



</body>

</html>