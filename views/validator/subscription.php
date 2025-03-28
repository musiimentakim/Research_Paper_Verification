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
					<h1 class="h3">Subscriptions</h1>

					<!-- Subscription Plans Section -->
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic Plan</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Includes basic validation features with limited tasks per month.</p>
									<ul>
										<li>5 verifications per month</li>
										<li>Email support</li>
										<li>Basic report access</li>
									</ul>
									<p class="card-text"><strong>$9.99 / month</strong></p>
									<a href="#" class="btn btn-primary">Choose Plan</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Pro Plan</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Includes advanced features with a higher task limit.</p>
									<ul>
										<li>50 verifications per month</li>
										<li>Priority support</li>
										<li>Advanced report access</li>
									</ul>
									<p class="card-text"><strong>$29.99 / month</strong></p>
									<a href="#" class="btn btn-primary">Choose Plan</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Enterprise Plan</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Full features with unlimited verifications and enterprise-level support.</p>
									<ul>
										<li>Unlimited verifications</li>
										<li>24/7 support</li>
										<li>Custom reports & analytics</li>
									</ul>
									<p class="card-text"><strong>$99.99 / month</strong></p>
									<a href="#" class="btn btn-primary">Choose Plan</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-5">
					
					<!-- Billing & Payments and Subscription Status Section -->
					<div class="row mt-5">
						<!-- Billing & Payments Card -->
						<div class="col-md-6">
							<div id="billing-card" class="card">
								<div id="billing-header" class="card-header">
									<h5 id="billing-title" class="card-title">Billing & Payments</h5>
								</div>
								<div id="billing-body" class="card-body">
									<h6>Current Plan: Pro Plan</h6>
									<p><strong>Next Payment: </strong> 2025-04-01</p>
									<p><strong>Billing Method: </strong> Credit Card (**** **** **** 1234)</p>
									<a href="#" class="btn btn-success">Update Payment Method</a>
								</div>
							</div>
						</div>

						<!-- Subscription Status Card -->
						<div class="col-md-6">
							<div id="subscription-card" class="card">
								<div id="subscription-header" class="card-header">
									<h5 id="subscription-title" class="card-title">Subscription Status</h5>
								</div>
								<div id="subscription-body" class="card-body">
									<p><strong>Status: </strong> Active</p>
									<p><strong>Expiration Date: </strong> 2025-04-01</p>
									<p><strong>Renewal Date: </strong> 2025-03-31</p>
								</div>
							</div>
						</div>
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
