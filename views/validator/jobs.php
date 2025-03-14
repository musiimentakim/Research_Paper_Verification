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
					<h1 class="h3">Validation Tasks</h1>

					<!-- Queued Verification Jobs (Pending) -->
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Queued Verification Tasks</h5>
						</div>
						<div class="card-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Document Title</th>
										<th>Category</th>
										<th>Priority</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Research Paper A</td>
										<td>Research Paper</td>
										<td><span class="badge bg-warning">High</span></td>
										<td><a href="validate.php" class="btn btn-success">Start Validation</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Research Paper B</td>
										<td>Research Paper</td>
										<td><span class="badge bg-info">Medium</span></td>
										<td><a href="./validate.php" class="btn btn-success">Start Validation</a></td>
									</tr>
									<!-- More queued tasks -->
								</tbody>
							</table>
						</div>
					</div>

					<!-- Ongoing Verifications (Real-time progress) -->
					<div class="card mt-4">
						<div class="card-header">
							<h5 class="card-title">Ongoing Validation Tasks</h5>
						</div>
						<div class="card-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Document Title</th>
										<th>Category</th>
										<th>Progress</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Research Paper C</td>
										<td>Research Paper</td>
										<td>
											<div class="progress" style="height: 20px;">
												<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<span class="badge bg-secondary">50% Complete</span>
										</td>
										<td><button class="btn btn-info">Pause</button></td>
									</tr>
									<!-- More ongoing tasks -->
								</tbody>
							</table>
						</div>
					</div>

					<!-- Completed Jobs (History) -->
					<div class="card mt-4">
						<div class="card-header">
							<h5 class="card-title">Completed Validation Tasks</h5>
						</div>
						<div class="card-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Document Title</th>
										<th>Category</th>
										<th>Status</th>
										<th>Completion Time</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Research Paper D</td>
										<td>Research Paper</td>
										<td><span class="badge bg-success">Verified</span></td>
										<td>2025-03-12 14:32</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Research Paper E</td>
										<td>Research Paper</td>
										<td><span class="badge bg-danger">Failed</span></td>
										<td>2025-03-11 10:45</td>
									</tr>
									<!-- More completed tasks -->
								</tbody>
							</table>
						</div>
					</div>

					<!-- Job Priority Management -->
					<div class="card mt-4">
						<div class="card-header">
							<h5 class="card-title">Manage Task Priority</h5>
						</div>
						<div class="card-body">
							<form action="./update_job_priority.php" method="POST">
								<div class="mb-3">
									<label for="jobId" class="form-label">Task ID</label>
									<input type="number" class="form-control" id="taskid" name="jobId" placeholder="Enter Job ID" required>
								</div>
								<div class="mb-3">
									<label for="priority" class="form-label">Set Priority</label>
									<select class="form-select" id="priority" name="priority" required>
										<option value="high">High</option>
										<option value="medium">Medium</option>
										<option value="low">Low</option>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">Update Priority</button>
							</form>
						</div>
					</div>

					<!-- Retry Failed Jobs -->
					<div class="card mt-4">
						<div class="card-header">
							<h5 class="card-title">Failed Validation Tasks </h5>
						</div>
						<div class="card-body">
							<p>If a Validation task failed,retry it by selecting the job below and clicking the retry button.</p>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Document Title</th>
										<th>Category</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Research Paper F</td>
										<td>Research Paper</td>
										<td><span class="badge bg-danger">Failed</span></td>
										<td><button class="btn btn-warning">Retry</button></td>
									</tr>
									<!-- More failed tasks -->
								</tbody>
							</table>
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
