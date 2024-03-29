<?php 
	include 'config.php';
	session_start();
	if($_SESSION['role'] == 'doctor') header('location:doctor-profile-settings.php');
	if(!isset($_GET['idDoc'])) header('location:index.php');

	$docsRow = mysqli_fetch_assoc(mysqli_query($conn,"SELECT d.*,dc.country,dc.city FROM doctors d,doctors_contact_details dc WHERE d.idDoctor = " . $_GET['idDoc'] . " AND dc.idDoctor = d.idDoctor"));
	$curdate = new DateTime();
?>
<!DOCTYPE html> 
<html lang="en">
	
<?php include 'head.php' ?>
	<body>
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<?php include 'header.php' ?>
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-12">
						
							<div class="card">
								<div class="card-body">
									<div class="booking-doc-info">
										<a href="doctor-profile.html" class="booking-doc-img">
											<img src="assets/img/doctors/<?= $docsRow['profile_pic'] ?>" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a href="doctor-profile.html"><?= $docsRow['first_name'] . ' ' . $docsRow['last_name'] ?></a></h4>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">(11)</span>
											</div>
											<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> <?= $docsRow['city'] . ', '. $docsRow['country'] ?></p>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Schedule Widget -->
							<div class="card booking-schedule schedule-widget">
							
								<!-- Schedule Header -->
								<div class="schedule-header">
									<div class="row">
										<div class="col-md-12">
										
											<!-- Day Slot -->
											<div class="day-slot">
												<ul>
													<li class="left-arrow">
														<a href="#">
															<i class="fa fa-chevron-left"></i>
														</a>
													</li>
													<li>
														<span>Mon</span>
														<span class="slot-date"><?= $curdate->format('d M') ?> <small class="slot-year"><?= $curdate->format('Y') ?></small></span>
													</li>
													<li>
														<span>Tue</span>
														<span class="slot-date"><?= $curdate->format('d M')?> <small class="slot-year"><?= $curdate->format('Y') ?></small></span>
													</li>
													<li>
														<span>Wed</span>
														<span class="slot-date"><?= $curdate->format('d M') ?> <small class="slot-year"><?= $curdate->format('Y') ?></small></span>
													</li>
													<li>
														<span>Thu</span>
														<span class="slot-date"><?= $curdate->format('d M') ?> <small class="slot-year"><?= $curdate->format('Y') ?></small></span>
													</li>
													<li>
														<span>Fri</span>
														<span class="slot-date"><?= $curdate->format('d M') ?> <small class="slot-year"><?= $curdate->format('Y') ?></small></span>
													</li>
													<li>
														<span>Sat</span>
														<span class="slot-date"><?= $curdate->format('d M') ?> <small class="slot-year"><?= $curdate->format('Y') ?></small></span>
													</li>
													<li>
														<span>Sun</span>
														<span class="slot-date"><?= $curdate->format('d M') ?> <small class="slot-year"><?= $curdate->format('Y') ?></small></span>
													</li>
													<li class="right-arrow">
														<a href="#">
															<i class="fa fa-chevron-right"></i>
														</a>
													</li>
												</ul>
											</div>
											<!-- /Day Slot -->
											
										</div>
									</div>
								</div>
								<!-- /Schedule Header -->
								
								<!-- Schedule Content -->
								<div class="schedule-cont">
									<div class="row">
										<div class="col-md-12">
										
											<!-- Time Slot -->
											<div class="time-slot">
												<ul class="clearfix">
													<li>
														<a class="timing" href="#">
															<span>9:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>10:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>11:00</span> <span>AM</span>
														</a>
													</li>
													<li>
														<a class="timing" href="#">
															<span>9:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>10:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>11:00</span> <span>AM</span>
														</a>
													</li>
													<li>
														<a class="timing" href="#">
															<span>9:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>10:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>11:00</span> <span>AM</span>
														</a>
													</li>
													<li>
														<a class="timing" href="#">
															<span>9:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>10:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>11:00</span> <span>AM</span>
														</a>
													</li>
													<li>
														<a class="timing" href="#">
															<span>9:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>10:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>11:00</span> <span>AM</span>
														</a>
													</li>
													<li>
														<a class="timing" href="#">
															<span>9:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>10:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>11:00</span> <span>AM</span>
														</a>
													</li>
													<li>
														<a class="timing" href="#">
															<span>9:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>10:00</span> <span>AM</span>
														</a>
														<a class="timing" href="#">
															<span>11:00</span> <span>AM</span>
														</a>
													</li>
												</ul>
											</div>
											<!-- /Time Slot -->
											
										</div>
									</div>
								</div>
								<!-- /Schedule Content -->
								
							</div>
							<!-- /Schedule Widget -->
							
							<!-- Submit Section -->
							<div class="submit-section proceed-btn text-right">
								<a href="checkout.php?idDoc=<?= $_GET['idDoc'] ?>" class="btn btn-primary submit-btn">Proceed to Pay</a>
							</div>
							<!-- /Submit Section -->
							
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<?php include 'footer.php' ?>
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script>
			$('a').click(function(){
				$('a').removeClass('selected')
				$(this).addClass('selected')
			});
			
		</script>
		
	</body>
</html>