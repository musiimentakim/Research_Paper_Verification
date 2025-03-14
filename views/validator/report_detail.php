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
				<h1 class="h3">Document Detailed Report</h1>
				
				<!-- Document Details Section -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Document Information</h5>
					</div>
					<div class="card-body">
						<table class="table">
							<tr>
								<th>Document Name</th>
								<td>Sample Research Paper</td>
							</tr>
							<tr>
								<th>ISSN/ISBN</th>
								<td>1234-5678</td>
							</tr>
							<tr>
								<th>Document Type</th>
								<td>Research Paper</td>
							</tr>
							<tr>
								<th>Submitted Date</th>
								<td>2025-03-01</td>
							</tr>
							<tr>
								<th>Validation Status</th>
								<td><span class="badge bg-success">Valid</span></td>
							</tr>
							<tr>
								<th>Validation Date</th>
								<td>2025-03-13</td>
							</tr>
						</table>
					</div>
				</div>

				<!-- Plagiarism Check Results Section -->
				<div class="card mt-4">
					<div class="card-header">
						<h5 class="card-title">Plagiarism Check Results</h5>
					</div>
					<div class="card-body">
						<table class="table">
							<tr>
								<th>Plagiarism Percentage</th>
								<td>2%</td>
							</tr>
							<tr>
								<th>Plagiarism Status</th>
								<td><span class="badge bg-success">Passed</span></td>
							</tr>
							<tr>
								<th>Report</th>
								<td><a href="#" class="btn btn-info">View Report</a></td>
							</tr>
						</table>
					</div>
				</div>

				<!-- Document Actions Section -->
				<div class="card mt-4">
					<div class="card-header">
						<h5 class="card-title">Actions</h5>
					</div>
					<div class="card-body">
						<div class="d-flex">
							<button class="btn btn-primary me-2">Approve Document</button>
							<button class="btn btn-danger">Reject Document</button>
						</div>
					</div>
				</div>
				
				<!-- Comments Section (if any) -->
				<div class="card mt-4">
					<div class="card-header">
						<h5 class="card-title">Comments</h5>
					</div>
					<div class="card-body">
						<p>No comments added yet.</p>
						<!-- Option to add comments -->
						<textarea class="form-control" placeholder="Add your comment here..."></textarea>
						<div class="mt-2">
							<button class="btn btn-success">Submit Comment</button>
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
