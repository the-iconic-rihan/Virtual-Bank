<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

	<!-- the favicon -->
	<link rel="shortcut icon" href="../basicbankingsystem-main/img/logo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="../basicbankingsystem-main/index.css">
	<title>Basic Banking System</title>

	<!-- slick CSS -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<!--bootstrap-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="../basicbankingsystem-main/style/main.css" media="all">
	<link rel="stylesheet" href="../basicbankingsystem-main/style/all.min.css" media="all">
	<link rel="stylesheet" href="../basicbankingsystem-main/style/fontawesome.min.css" media="all">
	<!-- end here -->
	<!-- bootstrap cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="../basicbankingsystem-main/style.css" />
	<!-- jquery cdn -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
	
</head>

<body>

	
	<section class="px-0 w-100">
		<div class="container-fluid">
			<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-interval="1000" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

				</ol>
				<div class="carousel-inner first1">

					<div class="carousel-item active ">
						<img class=" d-block" src="./img/c1 (2).jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block ">
							<h1>Make Safe Payment</h1>
							<p>EASY TRANSACTIONS</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block " src="./img/c2.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h1>Make Safe Payment</h1>
							<p>EASY TRANSACTIONS</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class=" d-block" src="./img/c3.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h1>Make Safe Payment</h1>
							<p>EASY TRANSACTIONS</p>
						</div>
					</div>


				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<section class="category bg-light" id="cat">
		<main role="main">


			<div class=" py-5">
				<div class="container">
					<div class="section_title text-center mb-5 text-danger text-capitalize">

					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card mb-4 box-shadow">
								<div class="inner">
									<img class="card-img-top" src="./img/customer.jpg" data-holder-rendered="true">
								</div>
								<div class="card-body bg-secondary">
									<p class="card-text" style="text-align: center; ">Transaction History</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<a href="./transactionhistory.php" class="btn btn-primary">View</a>

										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card mb-4 box-shadow">
								<div class="inner">
									<img class="card-img-top" src="./img/money.jpg" data-holder-rendered="true">
								</div>
								<div class="card-body bg-secondary">
									<p class="card-text" style="text-align: center;">Transfer Money</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<a href="./transfermoney.php" class="btn btn-primary my-2 my-sm-0 text-light">View
											</a>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card mb-4 box-shadow">
								<div class="inner">
									<img class="card-img-top" src="./img/history.jpg" data-holder-rendered="true">
								</div>
								<div class="card-body bg-secondary">
									<p class="card-text" style="text-align: center;">Create User</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<a href="./createuser.php" class="btn btn-primary my-2 my-sm-0 text-light">View
											</a>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</section>
	<style>
		.bc {
			height: 20rem;
			background-image: url("./img/c1 (2).jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;

		}
	</style>
	<div class="container-fluid bc">
		<div class="container pt-5 pb-5">
			<div class="row inner-text">
				<div class="col-md-6 text-dangers">
					<h3 class="wow slideInUp">SAFE TRANSACTIONS</h3>
					<h1 class="wow mt-4 slideInDown text-primary">24 HOURS AVAILABLE</h1>
					<a href="./about.php" class="btn btn-primary my-2 my-sm-0">About Us
					</a>
				</div>
			</div>
		</div>
	</div>


	<section class="">

		<footer class="text-center mt-5 py-2">
			<p>&copy 2021. Made by <b>Rihan Bagwan</b><br>GRIP The Sparks Foundation.</p>
	</section>
	<div class="backtop">
		<a id="button" href="#top" class="btn btn-lg btn-warning" role="button">
			<i class="fas fa-chevron-up"></i> </a>
	</div>






	<!-- scripts -->
	<!-- bootstrap javascript cdn -->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php
?>