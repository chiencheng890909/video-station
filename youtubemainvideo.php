<?php
	$select = $_POST["target"];
	$query = "SELECT * FROM `video` WHERE `AuthorID` LIKE $select";

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
   
	while ( $row = mysqli_fetch_row( $result ) )
	{
		print("<h1>現在收看的是</h1>");
		printf('<h1 class="display-4">%s</h1>',$row[1]);
		print('<hr class="my-4"><div><center>');
		printf('%s',$row[3]);
		print('</center></div>');
	}
?>
