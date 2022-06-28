<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Azora - Super-Administrator Dashboard</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/desCSS/DashboardContent/css/styles.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/ed4f4a4301.js" crossorigin="anonymous"></script>
    <script src="/desCSS/DashboardContent/js/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <br/>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light"><i class="fab fa-accusoft mr-1"></i> Azora</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="feedBK.php">
                    <i class="fas fa-comment-alt mr-1"></i> Feedback
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="evaluation.php">
                    <i class="fas fa-address-card mr-1"></i> Evaluation
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="UserDetails.php">
                    <i class="fas fa-address-book mr-1"></i> User Details
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="CompanyDetails.php"><i class="fas fa-building mr-1"></i>  Company Details</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt mr-1"></i>  Log Out</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <!--This where the contents of the page goes as in when evaluation is clicked, its page shows here.-->           </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha256-E/V4cWE4qvAeO5MOhjtGtqDzPndRO1LBk8lJ/PR7CA4=" crossorigin="anonymous"></script>
    <!--<script src="~/Scripts/bootstrap.bundle.min.js"></script>-->
    <!-- Core theme JS-->
    <script src="/desCSS/DashboardContent/js/scripts.js"></script>
</body>
<?php
include('footer.php'); 
?>
</html>
