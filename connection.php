<?php
$servername="localhost";
$username="root";
$password="";
$dbname="women_safty";



$conn=mysqli_connect($servername, $username, $password);
if(!$conn)
{
	echo 'Not connected to the server';
}
if(!mysqli_select_db($conn,$dbname))
{
	echo'Database Not Selected';
}

else
{
echo 'connected';
}

if(isset($_POST['submit'])){
$adhar=$_POST['adharcard'];
$name=$_POST['name'];
$age=$_POST['age'];
$rating =$_POST['rating'];
$query ="insert into women(adharcard,name,age,rating)values('$adhar','$name','$age','$rating')";
if(mysqli_query($conn,$query))
{
	echo '"<h1 style = "color: red"> Successfully "</h1>"';
}
else
{
	echo 'not inserted';
}

}
?>