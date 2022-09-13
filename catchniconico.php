<?php
   $query = "SELECT * FROM `niconico`";
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
		if($times%4==1)
		{
			print('<div class="card-body row justify-content-center align-items-center" >');
		} 
		printf('<a style="margin:5px">%s</a>',$row[3]);
		if($times%4==0)
		{
			print('</div>');
		}
		$times++;
   }
?>