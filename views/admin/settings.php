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
</body>
</html>
