<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link  rel="shortcut icon" href="images/icon.ico" type="image/png"/>
    <title>Thapar Toastmasters</title>

    <!-- Bootstrap Core CSS -->
	 <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		a:hover,a,a:focus{
			color:#333;
			text-decoration:none;
		}
	</style>
</head>

<body>

    <!-- Navigation -->
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
                    <li class="active">
                        <a href="#">Club Officers</a>
                    </li>
					<?php if(isset($_SESSION['logged'])||isset($_COOKIE['username'])){
					?>
					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						  <?php echo ucfirst($_SESSION['username']);?> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						  <li><a href="logout.php">Log Out</a></li>
						  <li><a href="#">Change Password</a></li>
						</ul>
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
	<!--club-officers-details-->
	<ol class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li class="active">Club Officers</li>
	</ol>
	<!--panels-->
	<!--President-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-lg-3 pull-right">
					<img src="images/officers/president.jpg"  height="200" width="200" class="img-responsive img-circle"/>
				</div>
				<div class="col-lg-9">
					<h1>Shubham Bhatia<small> President</small></h1>
					<h6>Email:abc@example.com</h6>
					<h4>What he says about Toastmasters..</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel justo non lectus vestibulum luctus a vulputate ligula. Integer faucibus arcu in tellus accumsan porttitor. Phasellus porta tincidunt purus ac suscipit. Etiam feugiat, justo eget luctus posuere, tortor libero rutrum nulla, sit amet feugiat nibh libero at nulla. Proin efficitur arcu mi. Nunc odio mi, cursus ac quam vel, rhoncus vestibulum mauris. Donec egestas elementum lobortis. Proin ac lacinia nulla. </p>
				</div>
			</div>
		</div>
	</div>
	
	<!--VP Education-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-lg-3">
					<img src="images/officers/vp_education.jpg" alt="" height="200" width="200" class="img-responsive img-circle"/>
				</div>
				<div class="col-lg-9">
					<h1>Shubham Sharma<small> VP Education</small></h1>
					<h6>Email:abc@example.com</h6>
					<h4>What he says about Toastmasters..</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel justo non lectus vestibulum luctus a vulputate ligula. Integer faucibus arcu in tellus accumsan porttitor. Phasellus porta tincidunt purus ac suscipit. Etiam feugiat, justo eget luctus posuere, tortor libero rutrum nulla, sit amet feugiat nibh libero at nulla. Proin efficitur arcu mi. Nunc odio mi, cursus ac quam vel, rhoncus vestibulum mauris. Donec egestas elementum lobortis. Proin ac lacinia nulla. </p>
				</div>
			</div>
		</div>
	</div>
	
	<!--Secretary-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-lg-3 pull-right">
					<img src="images/officers/secretary.jpg" alt="" height="200" width="200" class="img-responsive img-circle"/>
				</div>
				<div class="col-lg-9">
					<h1>Mohit Kukkar<small> Secretary</small></h1>
					<h6>Email:abc@example.com</h6>
					<h4>What he says about Toastmasters..</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel justo non lectus vestibulum luctus a vulputate ligula. Integer faucibus arcu in tellus accumsan porttitor. Phasellus porta tincidunt purus ac suscipit. Etiam feugiat, justo eget luctus posuere, tortor libero rutrum nulla, sit amet feugiat nibh libero at nulla. Proin efficitur arcu mi. Nunc odio mi, cursus ac quam vel, rhoncus vestibulum mauris. Donec egestas elementum lobortis. Proin ac lacinia nulla. </p>
				</div>
			</div>
		</div>
	</div>
	<!--VP Membership-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-lg-3">
					<img src="images/officers/vp_membership.jpg" alt="" height="200" width="200" class="img-responsive img-circle"/>
				</div>
				<div class="col-lg-9">
					<h1>Abhijot Chopra<small> VP Membership</small></h1>
					<h6>Email:abc@example.com</h6>
					<h4>What he says about Toastmasters..</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel justo non lectus vestibulum luctus a vulputate ligula. Integer faucibus arcu in tellus accumsan porttitor. Phasellus porta tincidunt purus ac suscipit. Etiam feugiat, justo eget luctus posuere, tortor libero rutrum nulla, sit amet feugiat nibh libero at nulla. Proin efficitur arcu mi. Nunc odio mi, cursus ac quam vel, rhoncus vestibulum mauris. Donec egestas elementum lobortis. Proin ac lacinia nulla. </p>
				</div>
			</div>
		</div>
	</div>
	<!--SAA-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-lg-3 pull-right">
					<img src="images/officers/saa.jpg" alt="" height="200" width="200" class="img-responsive img-circle"/>
				</div>
				<div class="col-lg-9">
					<h1>Ishtjot Singh<small> Seargent At Arms</small></h1>
					<h6>Email:abc@example.com</h6>
					<h4>What he says about Toastmasters..</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel justo non lectus vestibulum luctus a vulputate ligula. Integer faucibus arcu in tellus accumsan porttitor. Phasellus porta tincidunt purus ac suscipit. Etiam feugiat, justo eget luctus posuere, tortor libero rutrum nulla, sit amet feugiat nibh libero at nulla. Proin efficitur arcu mi. Nunc odio mi, cursus ac quam vel, rhoncus vestibulum mauris. Donec egestas elementum lobortis. Proin ac lacinia nulla. </p>
				</div>
			</div>
		</div>
	</div>
	<!--Treasurer-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-lg-3">
					<img src="images/officers/treasurer.jpg" alt="" height="200" width="200" class="img-responsive img-circle"/>
				</div>
				<div class="col-lg-9">
					<h1>Rishav Raj Singh<small> Treasurer</small></h1>
					<h6>Email:abc@example.com</h6>
					<h4>What he says about Toastmasters..</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel justo non lectus vestibulum luctus a vulputate ligula. Integer faucibus arcu in tellus accumsan porttitor. Phasellus porta tincidunt purus ac suscipit. Etiam feugiat, justo eget luctus posuere, tortor libero rutrum nulla, sit amet feugiat nibh libero at nulla. Proin efficitur arcu mi. Nunc odio mi, cursus ac quam vel, rhoncus vestibulum mauris. Donec egestas elementum lobortis. Proin ac lacinia nulla. </p>
				</div>
			</div>
		</div>
	</div>
	<!--VP Public Relations-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-lg-3 pull-right">
					<img src="images/officers/vp_pr.jpg" alt="" height="200" width="200" class="img-responsive img-circle"/>
				</div>
				<div class="col-lg-9">
					<h1>Chhavi Singhal<small> VP Public Relations</small></h1>
					<h6>Email:abc@example.com</h6>
					<h4>What she says about Toastmasters..</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel justo non lectus vestibulum luctus a vulputate ligula. Integer faucibus arcu in tellus accumsan porttitor. Phasellus porta tincidunt purus ac suscipit. Etiam feugiat, justo eget luctus posuere, tortor libero rutrum nulla, sit amet feugiat nibh libero at nulla. Proin efficitur arcu mi. Nunc odio mi, cursus ac quam vel, rhoncus vestibulum mauris. Donec egestas elementum lobortis. Proin ac lacinia nulla. </p>
				</div>
			</div>
		</div>
	</div>
	
	
	<hr>
	        <!-- Footer -->
    <div class="container">    
    <div class="container">    
		<footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Thapar Toastmasters Club</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>	