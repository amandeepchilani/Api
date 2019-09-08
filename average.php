<html>
<body background ="image.jpg">
<h1 style="background-color:red">safty percentage of your area</h1>
</body>
</html>
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
$sql="SELECT AVG(rating ) AS average_price FROM women";
$query1=$conn->query($sql);
$row1=$query1->fetch_assoc();
echo "<h1 style= 'color:red'  >Your area  safty :".$row1['average_price'] ;  "   % </h1>";

 ?>percentage