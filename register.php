<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>註冊</title>
		<style type = "text/css">

			body	{ font-family: "Helvetica", "Arial","LiHei Pro","黑體-繁","微軟正黑體", sans-serif; }

			em	{ font-weight: bold;}
			
			a 	{color : black;}
			
		</style>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
		
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
						<a class="nav-link disabled" href="#">我的最愛</a>
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
		<div id ="address" class="jumbotron" style="margin:40px 500px 20px;">
			<form  method="post" action="apply.php">
				<div class="form-group">
					<h5><label for="name">暱稱</label></h5>
					<input type="text" class="form-control" name="nickname" aria-describedby="addressHelp" placeholder="Enter your name">
					<small id="addressHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<h5><label for="email">信箱</label></h5>
					<input type="email" class="form-control" name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<h5><label for="password">密碼</label></h5>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<h5><label for="check">請再次輸入密碼</label></h5>
					<input type="password" class="form-control" name="check" placeholder="Check your Password">
				</div>
				<p>&emsp;</p>
				<button style="float:right ; background-color:#737373" type="submit" class="btn btn-primary">確定</button>
			</form>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>