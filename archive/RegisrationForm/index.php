<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Simple Registration Form</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">

				<!-- if user is logged	-->
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Logged as <b><?php echo $_SESSION['usr_name']; ?></b></p></li>
				<li><a href="logout.php">Log Out</a></li>

				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<?php if (isset($_SESSION['usr_id'])) { ?>
	<div class="well">
		<h1>Ты кто такой?</h1>
		<p><h2>Я пользователь <b><?php echo $_SESSION['usr_name']; ?></b>!</h2></p>
		<p>
			<a class="btn btn-primary btn-large" href="logout.php">
				Давай до свидания!
			</a>
		</p>
	</div>
<?php } ?>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

