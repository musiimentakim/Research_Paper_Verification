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
					<h1 class="h3">Reviews</h1>

					<!-- Expert Reviews Section -->
					<section id="expert-reviews">
						<h4>Expert Reviews (Papers reviewed by subject matter experts)</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Paper ID</th>
									<th>Reviewer</th>
									<th>Review Date</th>
									<th>Rating</th>
									<th>Comments</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>P1234</td>
									<td>Dr. John Doe</td>
									<td>2025-02-01</td>
									<td>4.5</td>
									<td>Comprehensive analysis, but lacks clarity in conclusion.</td>
								</tr>
								<tr>
									<td>P5678</td>
									<td>Prof. Jane Smith</td>
									<td>2025-02-10</td>
									<td>5.0</td>
									<td>Excellent research with clear findings and recommendations.</td>
								</tr>
							</tbody>
						</table>
					</section>

					<!-- Peer Review Feedback Section -->
					<section id="peer-review-feedback" class="mt-4">
						<h4>Peer Review Feedback (User-submitted comments)</h4>
						<form action="#" method="POST">
							<div class="mb-3">
								<label for="peerReviewPaperId" class="form-label">Paper ID</label>
								<input type="text" class="form-control" id="peerReviewPaperId" name="peerReviewPaperId" placeholder="Enter Paper ID" required>
							</div>
							<div class="mb-3">
								<label for="peerReviewComments" class="form-label">Your Comments</label>
								<textarea class="form-control" id="peerReviewComments" name="peerReviewComments" rows="4" placeholder="Enter your feedback on the paper" required></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Submit Review</button>
						</form>
					</section>

					<!-- Review Status Tracking Section -->
					<section id="review-status-tracking" class="mt-4">
						<h4>Review Status Tracking (Pending, Approved, Rejected)</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Paper ID</th>
									<th>Current Status</th>
									<th>Reviewer</th>
									<th>Comments</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>P1234</td>
									<td>Pending</td>
									<td>Dr. John Doe</td>
									<td>Awaiting final analysis from reviewer.</td>
								</tr>
								<tr>
									<td>P5678</td>
									<td>Approved</td>
									<td>Prof. Jane Smith</td>
									<td>Review complete, paper approved for publication.</td>
								</tr>
								<tr>
									<td>P4321</td>
									<td>Rejected</td>
									<td>Dr. Alice Green</td>
									<td>Not sufficient contributions to the field.</td>
								</tr>
							</tbody>
						</table>
					</section>

					<!-- Reviewer Assignments Section -->
					<section id="reviewer-assignments" class="mt-4">
						<h4>Reviewer Assignments (Manual or automatic reviewer allocation)</h4>
						<form action="#" method="POST">
							<div class="mb-3">
								<label for="reviewerAssignmentPaperId" class="form-label">Paper ID</label>
								<input type="text" class="form-control" id="reviewerAssignmentPaperId" name="reviewerAssignmentPaperId" placeholder="Enter Paper ID" required>
							</div>
							<div class="mb-3">
								<label for="reviewerAssignment" class="form-label">Select Reviewer</label>
								<select class="form-control" id="reviewerAssignment" name="reviewerAssignment">
									<option value="manual">Manual Assignment</option>
									<option value="auto">Automatic Assignment</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Assign Reviewer</button>
						</form>
					</section>

					<!-- Review History & Notes Section -->
					<section id="review-history-notes" class="mt-4">
						<h4>Review History & Notes (Past reviews and annotations)</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Paper ID</th>
									<th>Reviewer</th>
									<th>Review Date</th>
									<th>Notes</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>P1234</td>
									<td>Dr. John Doe</td>
									<td>2025-02-01</td>
									<td>Suggested revisions in methodology section.</td>
								</tr>
								<tr>
									<td>P5678</td>
									<td>Prof. Jane Smith</td>
									<td>2025-02-10</td>
									<td>Approved without revisions, well-structured research.</td>
								</tr>
							</tbody>
						</table>
					</section>
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
