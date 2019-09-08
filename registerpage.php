<?php
$servername="localhost";
$username="root";
$password="";
$dbname="women_safty";

$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($conn,$dbname))
{
	echo 'Database Not Selected';
}
else
{
	echo 'connected';
}
if(isset($_POST['submit'])){
	$name=$_POST['uname'];
	$password=$_POST['psw'];
	$contact=$_POST['cnt'];
	$query= "insert into registerform(username,password,contact)values('$name','$password','$contact')";
	if(mysqli_query($conn,$query))
	{
		echo '"<h1>" you are registed"<h1>" ';
	}
	else{
		echo'not inserted';
	}

}
?>
