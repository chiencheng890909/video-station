<?php

	$select = $_POST["target"];
	$query = "SELECT * FROM `collect`";
	
	if ( !( $database = mysqli_connect( "127.0.0.1", "user", "123" ) ) )
		die( "Could not connect to database </body></html>" );
   
	if ( !mysqli_select_db($database, "video" ) )
		die( "Could not open products database </body></html>" );
   
	if ( !( $result = mysqli_query($database, $query) ) )
	{
		print( "<p>Could not execute query!</p>" );
		die( mysqli_error() . "</body></html>" );
	}
	
	mysqli_close( $database );
	
	session_start();
	$times =1;
	
	while ( $row = mysqli_fetch_row( $result ) )
	{
		if(strcmp($_SESSION['email'],$row[4])==0)
		{
			if($select==$times)
			{
			print("<h1>現在收看的是</h1>");
			printf('<h1 class="display-4">%s</h1>',$row[1]);
			print('<hr class="my-4"><div><center>');
			printf('%s',$row[2]);
			print('</center></div>');
			print('</div>&emsp;</div>');
			print('<p class="card-text" style="margin:5px ;text-align:right ">如果無法正常播放,代表製作者有設置版權,請移至其影音網站觀看 </p>');
			printf('<button type="button"  onclick="location.href=\'%s\'" style="float:right" class="btn btn-secondary">點我傳送</button>',$row[5]);
			die();
			}
		$times+=1;
		}
	}
	
?>