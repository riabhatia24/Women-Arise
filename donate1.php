<?php

$host="localhost";
$dbuser="root";
$pass="";
$dbname="unistash";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);

if(mysqli_connect_errno())
{

	die("Connection Failed!". mysqli_connect_errno());
}
?>

<html>
<head>
<title>Donate Page</title>
<link rel="stylesheet" type="text/css" href="fullstyle11.css">

</head>
<body>
	
 <div class="fake">

<?php


if(!isset($_POST['signupbtn']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$mno=$_POST['mno'];



 if (empty($name)||empty($email)||empty($mno))
 	 
{

 	 echo "Oops! Can't leave any field blank!"; 
 	}
 	
    else

    {
    	$sql="INSERT INTO donateiwh (name,email,mno)".
    	"VALUES('$name','$email','$mno')";

    	$res=mysqli_query($conn,$sql); 

    	if(!$res)
    	{

    		die("Query Failed!". mysqli_error($conn));
    	}
    	else{
    		echo "Hello $name"."<br>";
    		
            
    	}

    }
}
else{
	echo "FORM NOT SUBMITTED" ;
}
    

?>

</div>


</body>
</html>