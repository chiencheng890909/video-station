<?php
   $query = "SELECT * FROM `video`";
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
   
   $times=1;
   while ( $row = mysqli_fetch_row( $result ) )
   {
		if($times==1||$times==6)
		{
			print('<div class="card-body row justify-content-center align-items-center" >');
		} 
		printf('<div id="youtube%s" class="card col-2" style="width: 18rem ; margin:5px 10px;">',$times);
		printf('<a style="margin:5px" onclick="start();"><img src=%s class="card-img-top" alt=%s></a>',$row[2],$row[1]);
		print('<div class="card-body">');
		printf('<a onclick="start();"><h5 class="card-title">%s</h5></a>',$row[1]);
		print('</div></div>');
		if($times==5||$times==10)
		{
			print('</div>');
		}
		$times++;
   }
?>
