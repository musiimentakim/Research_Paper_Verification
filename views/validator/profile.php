<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../Components/head.php" ?>
	<?php include "../Components/css-links.php" ?>
    
</head>

<body>
	<div class="wrapper">
		<div class="main">
			<?php include "./validatornavBar.php" ?>
            <main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3">Profile</h1>

					<!-- Profile Form -->
					<div class="card" id="profile-card" >
					<form action="#" method="POST" enctype="multipart/form-data">
						<div class="row gx-2">
							<!-- First Name and Second Name -->
							<div class="col-md-6" id="first-name">
								<div class="mb-3">
									<label for="firstName" class="form-label">First Name</label>
									<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" required>
								</div>
							</div>
							<div class="col-md-6" id="second-name">
								<div class="mb-3">
									<label for="secondName" class="form-label">Second Name</label>
									<input type="text" class="form-control" id="secondName" name="secondName" placeholder="Enter your second name" required>
								</div>
							</div>
						</div>

						<!-- Telephone Contacts -->
						<div class="row gx-2">
							<div class="col-md-6" id="first-contact">
								<div class="mb-3">
									<label for="primaryPhone" class="form-label">Primary Telephone</label>
									<input type="tel" class="form-control" id="primaryPhone" name="primaryPhone" placeholder="Enter primary telephone number" required>
								</div>
							</div>
							<div class="col-md-6" id="second-contact">
								<div class="mb-3">
									<label for="secondaryPhone" class="form-label">Secondary Telephone (Optional)</label>
									<input type="tel" class="form-control" id="secondaryPhone" name="secondaryPhone" placeholder="Enter secondary telephone number">
								</div>
							</div>
						</div>

						<!-- Address -->
						<div class="mb-3">
							<label for="address" class="form-label">Address</label>
							<textarea class="form-control" id="address" name="address" rows="1" placeholder="Enter your address" required></textarea>
						</div>

						<!-- Email Address -->
						<div class="mb-3">
							<label for="email" class="form-label">Email Address</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
						</div>

						<!-- Submit Button -->
						<div class="mb-3">
							<button type="submit" id ="profile-btn" class="btn btn-primary"><strong>Update Profile</strong></button>
						</div>
					</form>
					</div>
				</div>
			</main>            

			<footer class="footer">
				<?php include "../Components/footer.php" ?>
			</footer>
		</div>
	</div>
	<?php include "../Components/js-links.php" ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
