<!-- Link to navbar-styles-->
<?php include "../Components/css-links.php" ?>

<nav class="navbar navbar-expand-lg navbar-light navbar-bg">  
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="./index.php">
            <img src="../../assets/images/favicon.svg" alt="Logo" class="img-fluid" style="width: 40px; height: 40px">
        </a>

        <!-- Brand Name -->
        <a class="navbar-brand" href="./index.php">
            <span class="align-middle" style= "display: inline-block; height: 40px; font-size: 20px">Publication Sure</span>
        </a>

        <!-- Navbar Toggler for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">
                        <i class="align-middle" data-feather="grid"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./validate.php">
                        <i class="align-middle" data-feather="check-circle"></i> Validate Paper
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./Reports.php">
                        <i class="align-middle" data-feather="bar-chart-2"></i> Reports & Logs
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./subscription.php">
                        <i class="align-middle" data-feather="credit-card"></i> Subscriptions
                    </a>
                </li> 
            </ul>

            <!-- User Profile Dropdown -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <img src="../../assets/images/avatar.png" class="avatar img-fluid rounded me-1" alt="Validator" />
                        <span class="text-white">Validator</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="nav-drop-item">
                            <a class="nav-link text-blue" href="./profile.php">
                                <i class="align-middle" data-feather="user"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="./Components/logout.php">
                                <i class="align-middle" data-feather="log-out"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
