<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ProClinic-Bootstrap4 Hospital Admin</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
			<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/red.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="css/jquery-jvectormap.css">
	<link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">
				<a href="index.html"><img src="images/logo.png" class="logo" width="200px" style="border-radius: 50%" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">

				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-wheelchair"></span> Patients
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
						<li>
							<a href="add-patient.php">Add Patient</a>
						</li>
						<li>
							<a href="patients.php">All Patients</a>
						</li>
					
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Doctors
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						<li>
							<a href="add-doctor.html">Add Doctor</a>
						</li>
						<li>
							<a href="doctors.php">All Doctors</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Appointments
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
						<li>
							<a href="add-appointment.php">Add Appointment</a>
						</li>
						<li>
							<a href="appointments.php">All Appointments</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#nav-payment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-money"></span> Payments
					</a>
					<ul class="collapse list-unstyled" id="nav-payment">
						<li>
							<a href="add-payment.html">Add Payment</a>
						</li>
						<li>
							<a href="payments.php">All Payments</a>
						</li>
					
					</ul>
				</li>

			</ul>
			<div class="nav-help animated fadeIn">
				<h5><span class="ti-comments"></span> Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> +972 000000</h6>
				<h6>
					<span class="ti-email"></span> email@site.com</h6>
				<p class="copyright-text">Copy rights &copy; 2018</p>
			</div>
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="responsive-logo">
						<a href="index.html"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<span class="ti-menu" id="sidebarCollapse"></span>
						</li>
						<li class="nav-item">
							<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
						</li>
						<li class="nav-item">
							<a  data-toggle="modal" data-target=".proclinic-modal-lg">
								<span class="ti-search"></span>
							</a>

							<div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">Search Patient/Doctor:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens proclinic-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
								<a class="dropdown-item" href="#">
									<span class="ti-money"></span> Patient payment done</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span>Patient Appointment booked</a>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Edit Doctor</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Edit Doctor</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Edit Doctor</h3>
							<script type="text/javascript">
                                                                                                                	$(document).ready(function() {
                                                                                                                                            			$('#formm').submit(function(e) {
                                                                                                                                           			e.preventDefault();
                                                                                                                                            				$.ajax({
                                                                                                                                            					type: 'POST',
                                                                                                                                            					url: 'editdoctor.php',
                                                                                                                                            					data: $(this).serialize(),
                                                                                                                                            					success: function(response)
                                                                                                                                            					{
                                                                                                                                            				        location.href = 'index.html';

                                                                                                                                            					}
                                                                                                                                            				});
                                                                                                                                            			});
                                                                                                                                            		});
                                                                                                                                            </script>
							<?php
                            							$servername = "localhost";
                                                                                                      $username = "root";
                                                                                                      $password = "";
                                                                                                      $dbname = "proclinc";
                                                                                                       $namee=$_GET['name'];
                                                                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                                 $sql = "SELECT * FROM doctors WHERE Full_Name='$namee'";
                                                                                                  $result = mysqli_query($conn, $sql);
                                                                                                   if ($conn->connect_error) {
                                                                                                     die("Connection failed: " . $conn->connect_error);
                                                                                                        }
                                                                                                         if (mysqli_num_rows($result) > 0) {
                                                                                                           if($row =mysqli_fetch_assoc($result)) {
                                                                                                           $namee= $row['Full_Name'];
                                                                                                            $gender=$row['Gender'];
                                                                                                            $address=$row['Address'];
                                                                                                           $email=$row['email'];
                                                                                                           $phone=$row['Phone_Number'];
                                                                                                           $password=$row['password'];
                                                                                                           $department=$row['Department'];
                                                                                                           $doctor_details=$row['Doctor_Details'];
                                                                                                           $duty_time=$row['Duty_Time'];
                                                                                                           $specialzation=$row['Specialzation'];
                                                                                                           $dob=$row['Date_of_Birth'];


                               echo"
								<form method='post' id='formm'>
                            								<div class='form-row'>
                            									<div class='form-group col-md-6'>
                            										<label for='Doctor-name'>Doctor Name</label>
                            										<input type='text' class='form-control'value='{$namee}' placeholder='Doctor name' id='Doctor-name' name='doctor_name'>
                            									</div>
                            									<div class='form-group col-md-6'>
                            										<label for='dob'>Date Of Birth</label>
                            										<input type='date' placeholder='Date of Birth' value='{$dob}' class='form-control' id='dob' name='dob'>
                                                                </div>
                                                                <div class='form-group col-md-6'>
                            										<label for='specialization'>Specialization</label>
                            										<input type='text' placeholder='Specialization' class='form-control' value='{$specialzation}' id='specialization' name='specialzation'>
                            									</div>
                            									<div class='form-group col-md-6'>
                            										<label for='password'>Password</label>
                            										<input type='password' value='{$password}' placeholder='' class='form-control' id='password' name='password'>
                            									</div>
                            									<div class='form-group col-md-6'>
                            										<label for='phone'>Phone</label>
                            										<input type='text' placeholder='Phone' value='{$phone}' class='form-control' id='phone' name='phone'>
                            									</div>
                            									<div class='form-group col-md-6'>
                            										<label for='email'>Email</label>
                            										<input type='email' value='{$email}' placeholder='email' class='form-control' id='Email' name='email'>
                            									</div>
                            									<div class='form-group col-md-6'>
                            										<label for='gender'>Gender</label>
                            										<select class='form-control' value='{$gender}' id='gender' name='gender'>
                            											<option>Male</option>
                            											<option>Female</option>
                            											<option>Other</option>
                            										</select>
                            									</div>
                            									<div class='form-group col-md-6'>
                            										<label for='about-doctor'>Doctor Details</label>
                            										<textarea placeholder='Doctor Details' class='form-control' id='about-doctor' rows='3' name='doctor_details'> ".$doctor_details."</textarea>
                                                                </div>
                                                                <div class='form-group col-md-6'>
                            										<label for='address'>Address</label>
                            										<textarea placeholder='Address' class='form-control'  id='address' rows='3' name='address'>".$address."</textarea>
                            									</div>
                            									<div class='form-group col-md-6'>
                            										<label for='time-slot'>Duty Time</label>
                            										<select class='form-control' id='time-slot' name='duty_time' value='{$duty_time}'>
                            											<option>8AM-2PM</option>
                            											<option>8AM-12PM</option>
                            										</select>
                            									</div>
                            									<div class='form-group col-md-6'>
                            										<label for='department'>Department</label>
                            										<select class='form-control' value='{$department}' id='department' name='department'>
                            											<option>Neuro</option>
                            											<option>Ortho</option>
                            											<option>General</option>
                            										</select>
                            									</div>
                            									<div class='form-check col-md-12 mb-2'>
                            										<div class='text-left'>
                            											<div class='custom-control custom-checkbox'>
                            												<input class='custom-control-input' type='checkbox' id='ex-check-2'>
                            												<label class='custom-control-label' for='ex-check-2'>Please Confirm</label>
                            											</div>
                            										</div>
                            									</div>
                            									<div class='form-group col-md-6 mb-3'>
                            										<button type='submit' class='btn btn-primary btn-lg'>Submit</button>
                            									</div>
                            								</div>
                            							</form>";
                            							}
                            							}
                            							?>

							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Updated Successfully!</strong> Please Check in doctors list
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<!-- /Alerts-->
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Datatable  -->
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap4.min.js"></script>
    
	<!-- Custom Script-->
	<script src="js/custom.js"></script>

</body>

</html>