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

<<<<<<< HEAD
                            <a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="../../assets/images/avatar.png" class="avatar img-fluid rounded me-1" alt="Validator" /> <span class="text-dark">Validator</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3">Settings</h1>

                    <!-- General System Settings Section -->
                    <section id="general-system-settings">
                        <h4>General System Settings</h4>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="systemName" class="form-label">System Name</label>
                                <input type="text" class="form-control" id="systemName" name="systemName" placeholder="Enter system name" required>
                            </div>
                            <div class="mb-3">
                                <label for="timezone" class="form-label">Timezone</label>
                                <select class="form-control" id="timezone" name="timezone" required>
                                    <option value="UTC">UTC</option>
                                    <option value="EST">EST</option>
                                    <option value="PST">PST</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save General Settings</button>
                        </form>
                    </section>

                    <!-- Verification Rules & Policies Section -->
                    <section id="verification-rules" class="mt-4">
                        <h4>Verification Rules & Policies</h4>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="verificationPolicy" class="form-label">Verification Policy</label>
                                <textarea class="form-control" id="verificationPolicy" name="verificationPolicy" rows="4" placeholder="Enter verification policy details" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Verification Policies</button>
                        </form>
                    </section>

                    <!-- User Role Management Section -->
                    <section id="user-role-management" class="mt-4">
                        <h4>User Role Management</h4>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="roleName" class="form-label">Role Name</label>
                                <input type="text" class="form-control" id="roleName" name="roleName" placeholder="Enter new role name" required>
                            </div>
                            <div class="mb-3">
                                <label for="rolePermissions" class="form-label">Role Permissions</label>
                                <textarea class="form-control" id="rolePermissions" name="rolePermissions" rows="4" placeholder="Enter role permissions" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Role</button>
                        </form>
                    </section>

                    <!-- Notification Preferences Section -->
                    <section id="notification-preferences" class="mt-4">
                        <h4>Notification Preferences</h4>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="emailNotifications" class="form-label">Email Notifications</label>
                                <select class="form-control" id="emailNotifications" name="emailNotifications">
                                    <option value="enabled">Enabled</option>
                                    <option value="disabled">Disabled</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="smsNotifications" class="form-label">SMS Notifications</label>
                                <select class="form-control" id="smsNotifications" name="smsNotifications">
                                    <option value="enabled">Enabled</option>
                                    <option value="disabled">Disabled</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Notification Preferences</button>
                        </form>
                    </section>

                    <!-- Data Retention Policies Section -->
                    <section id="data-retention-policies" class="mt-4">
                        <h4>Data Retention Policies</h4>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="dataRetentionPeriod" class="form-label">Data Retention Period (in days)</label>
                                <input type="number" class="form-control" id="dataRetentionPeriod" name="dataRetentionPeriod" placeholder="Enter number of days" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data Retention Policy</button>
                        </form>
                    </section>
                </div>
            </main>

            <footer class="footer">
                <?php include "../Components/footer.php" ?>
            </footer>
        </div>
    </div>
    <?php include "../Components/js-links.php" ?>
=======
							<a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Admin" /> <span class="text-dark">Admin</span>
              </a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3">System Settings</h1>

          <!-- General System Settings -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">General System Settings</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">System Name</label>
                      <input type="text" class="form-control" value="Research Paper Verification System">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">System URL</label>
                      <input type="url" class="form-control" value="https://research-verification.example.com">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Timezone</label>
                      <select class="form-select">
                        <option value="UTC">UTC</option>
                        <option value="EST">EST</option>
                        <option value="PST">PST</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Date Format</label>
                      <select class="form-select">
                        <option value="MM/DD/YYYY">MM/DD/YYYY</option>
                        <option value="DD/MM/YYYY">DD/MM/YYYY</option>
                        <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save General Settings</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Email Configuration</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">SMTP Host</label>
                      <input type="text" class="form-control" value="smtp.example.com">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">SMTP Port</label>
                      <input type="number" class="form-control" value="587">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">SMTP Username</label>
                      <input type="text" class="form-control" value="noreply@example.com">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">SMTP Password</label>
                      <input type="password" class="form-control" value="********">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">From Email</label>
                      <input type="email" class="form-control" value="noreply@example.com">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Email Settings</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Verification Settings -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Verification Rules & Policies</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Verification Policy</label>
                      <textarea class="form-control" rows="4">Standard verification policy for research papers...</textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Minimum Confidence Score</label>
                      <input type="number" class="form-control" value="85" min="0" max="100">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Required Fields</label>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="title" checked>
                        <label class="form-check-label" for="title">Title</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="authors" checked>
                        <label class="form-check-label" for="authors">Authors</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="doi" checked>
                        <label class="form-check-label" for="doi">DOI</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="abstract" checked>
                        <label class="form-check-label" for="abstract">Abstract</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Verification Rules</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Crawler Settings</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Crawl Depth</label>
                      <input type="number" class="form-control" value="3" min="1" max="10">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Crawl Delay (seconds)</label>
                      <input type="number" class="form-control" value="2" min="1" max="10">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Max Pages per Domain</label>
                      <input type="number" class="form-control" value="100" min="1">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">User Agent</label>
                      <input type="text" class="form-control" value="ResearchPaperBot/1.0">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="followExternal" checked>
                        <label class="form-check-label" for="followExternal">Follow External Links</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Crawler Settings</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Security & Access Control -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Security Settings</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Session Timeout (minutes)</label>
                      <input type="number" class="form-control" value="30" min="5" max="120">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Max Login Attempts</label>
                      <input type="number" class="form-control" value="5" min="3" max="10">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Lockout Duration (minutes)</label>
                      <input type="number" class="form-control" value="15" min="5" max="60">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="forceSSL" checked>
                        <label class="form-check-label" for="forceSSL">Force SSL</label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="maintenanceMode">
                        <label class="form-check-label" for="maintenanceMode">Maintenance Mode</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Security Settings</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Data Management</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Data Retention Period (days)</label>
                      <input type="number" class="form-control" value="365" min="30" max="730">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Backup Frequency</label>
                      <select class="form-select">
                        <option value="daily">Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Backup Location</label>
                      <input type="text" class="form-control" value="/backup/research-verification">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="autoBackup" checked>
                        <label class="form-check-label" for="autoBackup">Enable Automatic Backup</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Data Settings</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Notification Settings -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Notification Settings</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label">System Alerts</label>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="systemEmail" checked>
                            <label class="form-check-label" for="systemEmail">Email</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="systemSMS">
                            <label class="form-check-label" for="systemSMS">SMS</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label">Paper Submissions</label>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="submissionEmail" checked>
                            <label class="form-check-label" for="submissionEmail">Email</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="submissionSMS">
                            <label class="form-check-label" for="submissionSMS">SMS</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label">Verification Updates</label>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="verificationEmail" checked>
                            <label class="form-check-label" for="verificationEmail">Email</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="verificationSMS">
                            <label class="form-check-label" for="verificationSMS">SMS</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Notification Settings</button>
                  </form>
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
>>>>>>> origin/main
</body>
</html>
