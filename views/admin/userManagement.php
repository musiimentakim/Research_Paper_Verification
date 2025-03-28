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
          <h1 class="h3">User Management</h1>

          <!-- User Statistics -->
          <div class="row">
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Total Users</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="users"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>1,245</h6>
                      <span class="text-muted">registered users</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Active Validators</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-success">
                        <i class="align-middle" data-feather="check-circle"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>24</h6>
                      <span class="text-muted">active validators</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Pending Approvals</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-warning">
                        <i class="align-middle" data-feather="clock"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>12</h6>
                      <span class="text-muted">awaiting approval</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Suspended Users</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-danger">
                        <i class="align-middle" data-feather="x-circle"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                      <span class="text-muted">suspended accounts</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- User Management Actions -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">User Management</h5>
                  <div class="float-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                      <i class="align-middle" data-feather="user-plus"></i> Add New User
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <!-- Search and Filter -->
                  <div class="row mb-3">
                    <div class="col-md-4">
                      <input type="text" class="form-control" placeholder="Search users...">
                    </div>
                    <div class="col-md-3">
                      <select class="form-select">
                        <option value="">All Roles</option>
                        <option value="admin">Administrator</option>
                        <option value="validator">Validator</option>
                        <option value="user">Regular User</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <select class="form-select">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="pending">Pending</option>
                        <option value="suspended">Suspended</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-primary w-100">Filter</button>
                    </div>
                  </div>

                  <!-- Users Table -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>User ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Last Active</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#USR001</td>
                          <td>Dr. Sarah Johnson</td>
                          <td>sarah.j@example.com</td>
                          <td><span class="badge bg-primary">Validator</span></td>
                          <td><span class="badge bg-success">Active</span></td>
                          <td>2024-03-20 14:30</td>
                          <td>
                            <button class="btn btn-sm btn-info" title="View Details">
                              <i class="align-middle" data-feather="eye"></i>
                            </button>
                            <button class="btn btn-sm btn-warning" title="Edit">
                              <i class="align-middle" data-feather="edit-2"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" title="Suspend">
                              <i class="align-middle" data-feather="lock"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>#USR002</td>
                          <td>John Smith</td>
                          <td>john.s@example.com</td>
                          <td><span class="badge bg-secondary">User</span></td>
                          <td><span class="badge bg-warning">Pending</span></td>
                          <td>2024-03-19 16:45</td>
                          <td>
                            <button class="btn btn-sm btn-info" title="View Details">
                              <i class="align-middle" data-feather="eye"></i>
                            </button>
                            <button class="btn btn-sm btn-warning" title="Edit">
                              <i class="align-middle" data-feather="edit-2"></i>
                            </button>
                            <button class="btn btn-sm btn-success" title="Approve">
                              <i class="align-middle" data-feather="check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>#USR003</td>
                          <td>Admin User</td>
                          <td>admin@example.com</td>
                          <td><span class="badge bg-danger">Administrator</span></td>
                          <td><span class="badge bg-success">Active</span></td>
                          <td>2024-03-20 09:15</td>
                          <td>
                            <button class="btn btn-sm btn-info" title="View Details">
                              <i class="align-middle" data-feather="eye"></i>
                            </button>
                            <button class="btn btn-sm btn-warning" title="Edit">
                              <i class="align-middle" data-feather="edit-2"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" title="Suspend">
                              <i class="align-middle" data-feather="lock"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!-- Pagination -->
                  <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <!-- Add User Modal -->
      <div class="modal fade" id="addUserModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label class="form-label">Full Name</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Role</label>
                  <select class="form-select" required>
                    <option value="">Select Role</option>
                    <option value="admin">Administrator</option>
                    <option value="validator">Validator</option>
                    <option value="user">Regular User</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" required>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Add User</button>
            </div>
          </div>
        </div>
      </div>

			<footer class="footer">
				<?php include "../Components/footer.php" ?>
			</footer>
		</div>
	</div>
	<?php include "../Components/js-links.php" ?>
</body>
</html>