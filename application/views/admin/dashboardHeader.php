<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#"><img src="https://www.asumsi.co/themes/asumsinew/assets/images/logo2.png" width="30" height="30" class="d-inline-block align-top" alt="">Administrator</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Berita</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url('index.php/Dashboard/inputBerita'); ?>">Input Berita</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/Dashboard/listberita'); ?>">List Berita</a>
							</div>
						</li>
						</ul>
						
						<form class="form-inline my-2 my-lg-0">
							<a class="btn btn-outline-success my-2 my-sm-0"  href="<?php echo base_url('/index.php/Login/logout'); ?>" role="button">Logout</a>&nbsp;
							<span class="navbar-text">
					      	Welcome <?php echo $_SESSION['username']; ?>	
					    </span>
						</form>
						
					</div>
				</nav>

