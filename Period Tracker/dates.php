<?php

$host="localhost";
$dbuser="root";
$pass="";
$dbname="period";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);

if(mysqli_connect_errno())
{

	die("Connection Failed!". mysqli_connect_errno());
}
?>

<html>
<head>
<title>Contribute Page</title>
<link rel="stylesheet" type="text/css" href="fullstyle11.css">

</head>
<body>
	
 <div class="fake">

<?php


if(isset($_POST['hello']))
{

$dates=$_POST['dates'];

 	}

    else

    {
    	$sql="INSERT INTO dates1 (dates)".
    	"VALUES('$dates')";

    	$res=mysqli_query($conn,$sql); 

    	if(!$res)
    	{

    		die("Query Failed!". mysqli_error($conn));
    	}
    	else{
    		echo "Hello $name"."<br>";
    		echo "Your response has been recorded successfully!"."<br>";
    	     echo "We will contact you soon"."<br>";
            
    	}}
    

?>

</div>

