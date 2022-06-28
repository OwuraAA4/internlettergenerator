<?php include('header.php');
include('dbcon.php');
$error ='';

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conDB, $_POST['username']);
    $password = mysqli_real_escape_string($conDB, $_POST['password']);
    $sql = "SELECT * FROM admin_details WHERE username = '$username' and user_password ='$password' ";
    $query = mysqli_query($conDB, $sql);
    
    if(mysqli_num_rows($query))
        {
            // include 'UserTable.php';
            header('Location:adminDashboardView.php');
        }
        else
        {
            $error = 'invalid username or password';
            //echo $error;
        }
}
?>
<head>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"  rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="desCSS/css/styles_admin.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="desCSS/css/font-awesome.min.css" type="text/css" media="all">
</head>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <br>
            <br>
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Hello,</h1>
                    <h2>Log in here with the Admin login credentials</h2>
                    <form action="" method="post">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" name="username" placeholder=" Username" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" placeholder="Password" required="">
                        </div>
                        <div>
                            <?php echo $error; ?>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit" name="login">Log In as an Admin</button>
                    </form>
                
                    <p class="account">You're not an admin? <a href="login.php">Click here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
            
    <?php
include('footer.php'); 
?>
</body>