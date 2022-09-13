<?php

$email=$_POST['email'];
$password=$_POST['password'];

$query = "SELECT * FROM `account`";

	if ( !( $database = mysqli_connect( "127.0.0.1", "user", "123" ) ) )
       die( "Could not connect to database </body></html>" );
   
	if ( !mysqli_select_db($database, "account" ) )
       die( "Could not open products database </body></html>" );
   
	if ( !( $result = mysqli_query($database, $query) ) )
	{
       print( "<p>Could not execute query!</p>" );
       die( mysqli_error() . "</body></html>" );
	}
	
   
	while ( $row = mysqli_fetch_row( $result ) )
	{
		if(strcmp($row[2],$email)==0&&strcmp($row[3],$password)==0)
		{
			session_start();
			$_SESSION['name']=$row[1];
			$_SESSION['email']=$row[2];
			$_SESSION['password']=$row[3];
			echo "<script>alert('登入成功'); location.href = '首頁(log).php';</script>";
			die();
		}
	}
	mysqli_close( $database );
	
	echo "<script>alert('登入失敗'); location.href = '首頁.php';</script>";
	die();
?>