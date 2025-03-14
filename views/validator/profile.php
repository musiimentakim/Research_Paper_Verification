<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../Components/head.php" ?>
</head>

<body>
	<div class="wrapper">
		<?php include "./ValidatorSideBar.php" ?>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="../../assets/images/avatar.png" class="avatar img-fluid rounded me-1" alt="Validator" /> <span class="text-dark">Validator</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3">Profile</h1>

					<!-- Profile Form -->
					<form action="#" method="POST" enctype="multipart/form-data">
						<div class="row">
							<!-- First Name and Second Name -->
							<div class="col-md-6">
								<div class="mb-3">
									<label for="firstName" class="form-label">First Name</label>
									<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label for="secondName" class="form-label">Second Name</label>
									<input type="text" class="form-control" id="secondName" name="secondName" placeholder="Enter your second name" required>
								</div>
							</div>
						</div>

						<!-- Telephone Contacts -->
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label for="primaryPhone" class="form-label">Primary Telephone</label>
									<input type="tel" class="form-control" id="primaryPhone" name="primaryPhone" placeholder="Enter primary telephone number" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label for="secondaryPhone" class="form-label">Secondary Telephone (Optional)</label>
									<input type="tel" class="form-control" id="secondaryPhone" name="secondaryPhone" placeholder="Enter secondary telephone number">
								</div>
							</div>
						</div>

						<!-- Address -->
						<div class="mb-3">
							<label for="address" class="form-label">Address</label>
							<textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter your address" required></textarea>
						</div>

						<!-- Profile Photo -->
						<div class="mb-3">
							<label for="profilePhoto" class="form-label">Profile Photo</label>
							<input type="file" class="form-control" id="profilePhoto" name="profilePhoto" accept="image/*">
						</div>

						<!-- Date of Birth -->
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label for="dob" class="form-label">Date of Birth</label>
									<input type="date" class="form-control" id="dob" name="dob" required>
								</div>
							</div>
						</div>

						<!-- Gender -->
						<div class="mb-3">
							<label for="gender" class="form-label">Gender</label>
							<select class="form-control" id="gender" name="gender" required>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
							</select>
						</div>

						<!-- Email Address -->
						<div class="mb-3">
							<label for="email" class="form-label">Email Address</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
						</div>

						<!-- Submit Button -->
						<div class="mb-3">
							<button type="submit" class="btn btn-primary">Update Profile</button>
						</div>
					</form>
				</div>
			</main>

			<footer class="footer">
				<?php include "../Components/footer.php" ?>
			</footer>
		</div>
	</div>
	<?php include "../Components/js-links.php" ?>
</body>
</html>
