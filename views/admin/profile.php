<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../Components/head.php" ?>
</head>

<body>
	<div class="wrapper">
		<?php include "./AdminSideBar.php" ?>

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
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Admin" /> <span class="text-dark">Admin</span>
              </a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3">Admin Profile</h1>

          <!-- Profile Overview -->
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body text-center">
                  <img src="img/avatars/avatar.jpg" class="rounded-circle mb-3" width="150" height="150" alt="Admin Avatar">
                  <h4 class="mb-1">Dr. Charles Hall</h4>
                  <p class="text-muted mb-3">System Administrator</p>
                  <button class="btn btn-primary mb-3">
                    <i class="align-middle" data-feather="camera"></i> Change Photo
                  </button>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Personal Information</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" value="Charles">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" value="Hall">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Primary Telephone</label>
                        <input type="tel" class="form-control" value="+1 (555) 123-4567">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Secondary Telephone</label>
                        <input type="tel" class="form-control" value="+1 (555) 987-6543">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" value="charles.hall@example.com">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" value="1980-05-15">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                          <option value="prefer-not-to-say">Prefer not to say</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Department</label>
                        <input type="text" class="form-control" value="Research Administration">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Professional Bio</label>
                      <textarea class="form-control" rows="3">Experienced administrator with expertise in research paper verification systems and academic publishing.</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Administrative Information -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Administrative Details</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Employee ID</label>
                      <input type="text" class="form-control" value="ADM-2024-001" readonly>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Role</label>
                      <input type="text" class="form-control" value="System Administrator" readonly>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Date Joined</label>
                      <input type="date" class="form-control" value="2024-01-01" readonly>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Access Level</label>
                      <input type="text" class="form-control" value="Full Administrative Access" readonly>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Last Login</label>
                      <input type="text" class="form-control" value="2024-03-20 14:30:45" readonly>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Security Settings</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Current Password</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">New Password</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Confirm New Password</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="twoFactor">
                        <label class="form-check-label" for="twoFactor">Enable Two-Factor Authentication</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Security</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Activity Log -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Recent Activity</h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Action</th>
                          <th>Details</th>
                          <th>IP Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2024-03-20 14:30</td>
                          <td>System Configuration</td>
                          <td>Updated crawler settings</td>
                          <td>192.168.1.1</td>
                        </tr>
                        <tr>
                          <td>2024-03-20 13:15</td>
                          <td>User Management</td>
                          <td>Added new validator account</td>
                          <td>192.168.1.1</td>
                        </tr>
                        <tr>
                          <td>2024-03-20 12:45</td>
                          <td>Security</td>
                          <td>Changed password</td>
                          <td>192.168.1.1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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