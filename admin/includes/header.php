<?php
		error_reporting(0);
		@session_start();
		if (!isset($_SESSION["sess_admin_login"])){header("location:"."index.php");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@housamz">

				<meta name="description" content="Mass Admin Panel">
				<title>Portfolio Admin Panel</title>
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
							Portfolio Admin Panel<br>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							Portfolio<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
			<li><a href="about.php"> <i class="glyphicon glyphicon-folder-open"></i>About <span class="pull-right"><?=counting("about", "id")?></span></a></li>
<li><a href="admins.php"> <i class="glyphicon glyphicon-save-file"></i>Admins <span class="pull-right"><?=counting("admins", "id")?></span></a></li>
<li><a href="gallery.php"> <i class="glyphicon glyphicon-scissors"></i>Gallery <span class="pull-right"><?=counting("gallery", "id")?></span></a></li>
<li><a href="resume.php"> <i class="glyphicon glyphicon-cloud-download"></i>Resume <span class="pull-right"><?=counting("resume", "id")?></span></a></li>
<li><a href="skills.php"> <i class="glyphicon glyphicon-collapse-down"></i>Skills <span class="pull-right"><?=counting("skills", "id")?></span></a></li>
<li><a href="social.php"> <i class="glyphicon glyphicon-pushpin"></i>Social <span class="pull-right"><?=counting("social", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">