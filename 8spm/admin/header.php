<?php
	session_start();
	error_reporting(E_ERROR | E_PARSE);
	if(isset($_SESSION['us']))
	{
		$name = $_SESSION['us']; 
	}
		else
			header("location:../404.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>COE - Admin Panel</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer" id="page-top">
	<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav" style="padding-bottom: 2px;">
		<a class="navbar-brand" href="index.php">
			<div style="height: 42;">
				<p style="margin: 2px 0px 10px 0px">&nbsp; Welcome, <?php echo  $_SESSION['us'];  ?></p>
			</div>
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
			data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
					<a class="nav-link" href="index.php">
						<i class="fa fa-fw fa-dashboard"></i>
						<span class="nav-link-text">Dashboard</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="addround.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Add Rounds</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="addtool.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Add Tools</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="addcity.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Add City</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="activeround.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Activate Rounds</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="actbaseround.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Selecting First Rounds</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="addquestion.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Add Question</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="activateuser.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Activate User</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="adduserf.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Add User For First Round</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="updateusr.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Update User </span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="addjury.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Add Jury</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="allocatejury.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Allocate Jury</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="allsubmission.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">All Submission</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="currentrndsubmission.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Current Round Submission</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="alljurycheck.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">All Jury Status</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="currndjury.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">Current  ROund Jury Status</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Round">
					<a class="nav-link" href="marksusrall.php">
						<i class="fa fa-fw fa-comments"></i>
						<span class="nav-link-text">All User Marks</span>
					</a>
				</li>
				
				
			</ul>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-fw fa-sign-out"></i>Logout</a>
				</li>
			</ul>
		</div>
	</nav>