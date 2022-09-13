<?php
$videoname=$_POST['videoname'];
$URL = $_POST['URL'];

$query = "SELECT * FROM `collect`";

if ( preg_match( "/www.youtube.com/", $URL ) )
{
	

	if ( !( $database = mysqli_connect( "127.0.0.1", "user", "123" ) ) )
       die( "Could not connect to database </body></html>" );
   
	if ( !mysqli_select_db($database, "video" ) )
       die( "Could not open products database </body></html>" );
   
	if ( !( $result = mysqli_query($database, $query) ) )
	{
       print( "<p>Could not execute query!</p>" );
       die( mysqli_error() . "</body></html>" );
	}
	
	preg_match('/[^.]+\.[^.]+$/', $URL, $matches);
	$host = $matches[0];
	preg_match('/[^]+v=[^.]+$/', $host, $matches);
	
	session_start();
	$_SESSION['ID']=$matches[0];
	
	$sql = "INSERT INTO collect ( videoname,videoURL,ID,account,URL ) VALUES ('".$videoname."','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/$matches[0]\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','".$_SESSION['ID']."','".$_SESSION['email']."','".$URL."')";

	if ( !( $result = mysqli_query($database, $sql) ) )
	{
		echo "<script>alert('新增失敗'); location.href = '目錄(log).php';</script>";
		die();
	}
	else
	{
		echo "<script>alert('新增成功'); location.href = '目錄(log).php';</script>";
		die();
	}
	mysqli_close( $database );
}
else if(preg_match( "/www.nicovideo.jp/", $URL))
{

	if ( !( $database = mysqli_connect( "127.0.0.1", "user", "123" ) ) )
       die( "Could not connect to database </body></html>" );
   
	if ( !mysqli_select_db($database, "video" ) )
       die( "Could not open products database </body></html>" );
   
	if ( !( $result = mysqli_query($database, $query) ) )
	{
       print( "<p>Could not execute query!</p>" );
       die( mysqli_error() . "</body></html>" );
	}
	
	preg_match('/[^.]+\.[^.]+$/', $URL, $matches);

	$host = $matches[0];
	preg_match('/[^]watch\/[^.]+$/', $host, $matches);
	
	
	session_start();
	$_SESSION['ID']=$matches[0];
	
	
	$sql = "INSERT INTO collect ( videoname,videoURL,ID,account,URL ) VALUES ('".$videoname."','<iframe width=\'312\' height=\'176\' src=\'https://ext.nicovideo.jp/thumb/$matches[0]\' scrolling=\'no\' style=\'border:solid 1px #ccc;\' frameborder=\'0\'><a href=\'$URL\'>$videoname</a></iframe>','".$_SESSION['ID']."','".$_SESSION['email']."','".$URL."')";

	if ( !( $result = mysqli_query($database, $sql) ) )
	{
		echo "<script>alert('新增失敗'); location.href = '目錄(log).php';</script>";
		die();
	}
	else
	{
		echo "<script>alert('新增成功'); location.href = '目錄(log).php';</script>";
		die();
	}
	mysqli_close( $database );
}
else
{
	echo "<script>alert('錯誤網址'); location.href = '目錄(log).php';</script>";
	die();
}

?>