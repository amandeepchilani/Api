<html>
<form action="logedin.php" method="post">
<h1>LOGIN FORM</h1>
<label>NAME:</label><input type="text" name="name"/><br>
<label>PASSWORD:</label><input type="text" name="pass"/><br>
<input type="submit" name="submit">
</html>
<?php
session_start();
mysqli_connect("localhost","root","","women_safty");
if(isset($REQUEST["submit"]))
{
$user=$_Request["name"];
$pass=$_Request["pass"];
$query=mysql_query("select * from registerform where username='$user' &&  password='$pass'");
$rowcount=mysql_num_rows($query);
if(rowcount==true)
{	$_SESSION["user"]=$user;
echo " your username and password is correct";
}
else
{
echo " not correct";
}
}



?>