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

					<!-- Billing & Payments Section -->
					<div class="row mt-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Billing & Payments</h5>
								</div>
								<div class="card-body">
									<h6>Current Plan: Pro Plan</h6>
									<p><strong>Next Payment: </strong> 2025-04-01</p>
									<p><strong>Billing Method: </strong> Credit Card (**** **** **** 1234)</p>
									<a href="#" class="btn btn-success">Update Payment Method</a>
									<a href="#" class="btn btn-info">View Payment History</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Subscription Status Section -->
					<div class="row mt-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Subscription Status</h5>
								</div>
								<div class="card-body">
									<p><strong>Status: </strong> Active</p>
									<p><strong>Expiration Date: </strong> 2025-04-01</p>
									<p><strong>Renewal Date: </strong> 2025-03-31</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Upgrade/Downgrade Options Section -->
					<div class="row mt-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Upgrade/Downgrade Options</h5>
								</div>
								<div class="card-body">
									<p>You can upgrade or downgrade your plan at any time. Here are your options:</p>
									<a href="#" class="btn btn-warning">Upgrade to Enterprise</a>
									<a href="#" class="btn btn-secondary">Downgrade to Basic</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Usage Limits & Quotas Section -->
					<div class="row mt-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Usage Limits & Quotas</h5>
								</div>
								<div class="card-body">
									<p><strong>Verifications Remaining:</strong> 30/50</p>
									<p><strong>Data Usage:</strong> 2GB/5GB</p>
									<p><strong>Reports Accessed:</strong> 10/50</p>
									<p><strong>Tasks Pending:</strong> 5</p>
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
</body>
</html>
