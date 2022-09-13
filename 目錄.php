<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>楚瑜，永不放棄</title>
		<style type = "text/css">

			body	{ font-family: "Helvetica", "Arial","LiHei Pro","黑體-繁","微軟正黑體", sans-serif; }

			em	{ font-weight: bold;}
			
			a 	{color : black;}
			
		</style>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
		function catchnetflix() 
		{	
			$.ajax(
			{
				url: "catchnetflix.php",
				type: "POST",
				datatype: "html",
				success: function( output ) 
				{
					$( "#netflix" ).html(output);
				},
				error : function()
				{
					alert( "Request failed." );
				}
			});
		}
		function catchyoutube() 
		{	
			$.ajax(
			{
				url: "catchyoutube.php",
				type: "POST",
				datatype: "html",
				success: function( output ) 
				{
					$( "#youtube" ).html(output);
				},
				error : function()
				{
					alert( "Request failed." );
				}
			});
		}
		function catchniconico() 
		{	
			$.ajax(
			{
				url: "catchniconico.php",
				type: "POST",
				datatype: "html",
				success: function( output ) 
				{
					$( "#niconico" ).html(output);
				},
				error : function()
				{
					alert( "Request failed." );
				}
			});
		}
		window.addEventListener( "load",catchnetflix, false );
		window.addEventListener( "load",catchyoutube, false );
		window.addEventListener( "load",catchniconico, false );
		</script>
		<script>
			function start()
			{
				document.getElementById( "youtube1" ).addEventListener(
					"click", function() { youtubefind( "1" ); }, false );
				document.getElementById( "youtube2" ).addEventListener(
					"click", function() { youtubefind( "2" ); }, false );
				document.getElementById( "youtube3" ).addEventListener(
					"click", function() { youtubefind( "3" ); }, false );
				document.getElementById( "youtube4" ).addEventListener(
					"click", function() { youtubefind( "4" ); }, false );
				document.getElementById( "youtube5" ).addEventListener(
					"click", function() { youtubefind( "5" ); }, false );
				document.getElementById( "youtube6" ).addEventListener(
					"click", function() { youtubefind( "6" ); }, false );
				document.getElementById( "youtube7" ).addEventListener(
					"click", function() { youtubefind( "7" ); }, false );
				document.getElementById( "youtube8" ).addEventListener(
					"click", function() { youtubefind( "8" ); }, false );
				document.getElementById( "youtube9" ).addEventListener(
					"click", function() { youtubefind( "9" ); }, false );
				document.getElementById( "youtube10" ).addEventListener(
					"click", function() { youtubefind( "10" ); }, false );
				document.getElementById( "netflix1" ).addEventListener(
					"click", function() { netflixfind( "1" ); }, false );
				document.getElementById( "netflix2" ).addEventListener(
					"click", function() { netflixfind( "2" ); }, false );
				document.getElementById( "netflix3" ).addEventListener(
					"click", function() { netflixfind( "3" ); }, false );
				document.getElementById( "netflix4" ).addEventListener(
					"click", function() { netflixfind( "4" ); }, false );
				document.getElementById( "netflix5" ).addEventListener(
					"click", function() { netflixfind( "5" ); }, false );
				document.getElementById( "netflix6" ).addEventListener(
					"click", function() { netflixfind( "6" ); }, false );
				document.getElementById( "netflix7" ).addEventListener(
					"click", function() { netflixfind( "7" ); }, false );
				document.getElementById( "netflix8" ).addEventListener(
					"click", function() { netflixfind( "8" ); }, false );
				document.getElementById( "netflix9" ).addEventListener(
					"click", function() { netflixfind( "9" ); }, false );
				document.getElementById( "netflix10" ).addEventListener(
					"click", function() { netflixfind( "10" ); }, false );
			}
 			function youtubefind(target)
			{
				$.ajax(
			{
				url: "youtubemainvideo.php",
				data: 
				{
					target: target
				},

				type: "POST",
				datatype: "html",
				
				success: function( output ) 
				{
					$( "#mainvideo" ).html(output);
				},
				error : function()
				{
					alert( "Request failed." );
				}
			});
				$("html, body").animate({scrollTop: $('#videobox').offset().top}, 100, 'swing');
			}
			function netflixfind(target)
			{
				$.ajax(
			{
				url: "netflixmainvideo.php",
				data: 
				{
					target: target
				},

				type: "POST",
				datatype: "html",
				
				success: function( output ) 
				{
					$( "#mainvideo" ).html(output);
				},
				error : function()
				{
					alert( "Request failed." );
				}
			});
				$("html, body").animate({scrollTop: $('#videobox').offset().top}, 100, 'swing');
			}

			window.addEventListener( "load", start, false );
		</script>
	</head>
	
	<body style="background-color:#d6d5db;">
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a style="color:white;" class="navbar-brand">楚瑜，永不放棄</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="首頁.php">首頁<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="目錄.php">目錄</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#target">我的最愛</a>
					</li>
				</ul>
				<ul class="navbar-nav my-2 my-lg-0">
					<li class="nav-item">
						<a>&emsp;</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-danger" href="Signin.php">登入</a>
					</li>
					<li class="nav-item">
						<a>&emsp;</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-info" href="register.php">註冊</a>
					</li>
				</ul>
			</div>
		</nav>
		<div id = "videobox"></div>
		<div id ="mainvideo" class="jumbotron" style="margin:40px 20px 20px;">
			<h1>現在收看的是</h1>
			<h1 class="display-4">YouTube: Our Brand Mission</h1>
			<hr class="my-4">
			<div>
				<center>
					<iframe style="border-radius: 10px" width="720" height="360" 
					src="https://www.youtube.com/embed/kwmFPKQAX4g" 
					frameborder="0" 
					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
					allowfullscreen>
					</iframe>
				</center>
			</div>
		</div>
		
		
		
		<div class="accordion" id="accordionExample" style="margin:40px 20px 20px">
			<div class="card">
				<div class="card-header" style="text-align:center">
					<h2 class="mb-0">
						<button style="text-decoration:none ; color:red;" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						<h1><strong>NETFLIX</strong></h1>
						</button>
					</h2>
				</div>
				<div id="collapseOne" class="collapse show" aria-labelledby="netflix" data-parent="#accordionExample">
					<p class="card-text" style="margin:5px ;text-align:right ">點擊方格即可觀看 </p>
					<div id ="netflix"></div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" style="text-align:center">
					<h2 class="mb-0">
						<button style="text-decoration:none ; color:black;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<h1 style="color:black;">YouTube</h1>
						</button>
					</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="youtube" data-parent="#accordionExample">
					<p class="card-text" style="margin:5px ;text-align:right ">點擊方格即可觀看 </p>
					<div id ="youtube"></div>	
				</div>
			</div>
			<div class="card">
				<div class="card-header" style="text-align:center">
					<h2 class="mb-0">
						<button style="text-decoration:none ; color:black;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<p><center><img src="title/niconico.mark.png"></center></p>
						</button>
					</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="youtube" data-parent="#accordionExample">
					<p class="card-text" style="margin:5px ;text-align:right ">點擊方格即可觀看 </p>
					<div id ="niconico"></div>	
				</div>
			</div>
			
			<div class="card" id="target">
				<div class="card-header" style="text-align:center">
					<h2 class="mb-0">
						<button style="text-decoration:none ; color:black;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						<h1 style="color:black;">我的最愛</h1>
						</button>
					</h2>
				</div>
				<div style="text-align:center" id="collapseFour" class="collapse" aria-labelledby="collect" data-parent="#accordionExample">
					<p class="card-text" style="margin:5px ;text-align:right "></p>
					<div class="card-body" id="collect">
						<a href="Signin.php">點我登入</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>