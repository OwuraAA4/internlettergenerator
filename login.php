<?php
include('header.php');
//Database connection
//include('dbcon.php');
$error ='';

if(isset($_POST['login'])){

    //This side with be uncommented assuming we wanted to verify if the user was qualified to open to the next page or not
    /*$username = mysqli_real_escape_string($conDB, $_POST['username']);
    $password = mysqli_real_escape_string($conDB, $_POST['password']);
    //var_dump($password);exit;
    $sql = "SELECT * FROM user_acc_details WHERE username = '$username' and user_password ='$password' ";
    $query = mysqli_query($conDB, $sql);
    $_SESSION['username'] = $username;
    if(mysqli_num_rows($query))
        {
            // include 'UserTable.php';
            header('Location:internpage.php');
        }
        else
        {
            $error = 'invalid username or password';
            //echo $error;
        } */

        header('Location:internpage.php');
}
?>
<head>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"  rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="desCSS/css/style.css" type="text/css" media="all" />
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
                    <h1>Hey, there!</h1>
                    <p class="sub-para">Sign in with your student credentials and proceed to enter your student details</p>
                    <h2>Log in here with your student credentials</h2>
                    <form action="" method="post">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" name="username" placeholder="Username" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" placeholder="Password" required="">
                        </div>
                        <div>
                            <?php echo $error; ?>
                        </div>
                        <!--<div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                        </div>-->
                        <button class="btn btn-primary btn-block" type="submit" name="login">Log In</button>
                    </form>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer 
        <div class="footer">
            <p> &copy; Copyright <strong><span> - Computer Science Department</span></strong>. All Rights Reserved 
                <a href="https://knust.edu.gh/"target="blank"></a>
            </p>
        </div>
         footer -->
    </div>
            </div>
            
    <?php
include('footer.php'); 
?>
</body>
</html>