<?php

$nickname=$_POST['nickname'];
$email=$_POST['email'];
$password=$_POST['password'];
$check=$_POST['check'];

if(strcmp($password,$check)!=0)
{
	echo "<script>alert('密碼不相同'); location.href = 'register.php';</script>";
	die();
}

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
		if(strcmp($row[2],$email)==0)
		{
			echo "<script>alert('此信箱已經是用戶'); location.href = '首頁.php';</script>";
			die();
		}
	}
	$sql = "INSERT INTO account ( nickname, email, password ) VALUES ('".$nickname."','".$email."','".$password."')";

	if ( !( $result = mysqli_query($database, $sql) ) )
	{
		echo "<script>alert('註冊失敗'); location.href = '首頁.php';</script>";
		die();
	}
	else
	{
		echo "<script>alert('註冊成功'); location.href = '首頁.php';</script>";
		die();
	}
	
	mysqli_close( $database );
?>