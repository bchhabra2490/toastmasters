<?php
session_start();
if(isset($_SESSION['logged'])||isset($_COOKIE['username'])){
	header('Refresh:0;URL=home.php');
}
?>
<html>
	<head>
		<title>LogIn</title>
		<link href="css/login.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link  rel="shortcut icon" href="images/icon.ico" type="image/png"/>
	</head>
	<body>
	<!--fb-api-login-->
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '531711940314195',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<!--nav-->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" data-hover="Home Page" href="index.php">Toastmasters</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="club_officers.php">Club Officers</a>
                    </li>
					<?php if(isset($_SESSION['logged'])||isset($_COOKIE['username'])){
					?>
					<li>
                        <a href="logout.php">Log Out</a>
                    </li>
					<?php
					}
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>	
	<!--/nav-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<h1 class="text-center login-title">Sign In</h1>
					<div class="account-wall">
						<img class="profile-img" src="images/tm_logo.png"
							alt="">
						<?php if(isset($_GET['error']) && $_GET['error']==1){ ?><li class="alert alert-default">Username/Password is incorrect.</li><?php } ?>	
						<form class="form-signin" method="post" action="validate.php">
						<input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
						<input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Sign In">
						<label class="checkbox pull-left">
							<input type="checkbox" value="remember-me" name="remember">
							Remember me
						</label>
						<a href="#" class="pull-right need-help">Need help? <small>Contact Webmaster</small></a><span class="clearfix"></span>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!--end container-->	
	</body>
			<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</html>	