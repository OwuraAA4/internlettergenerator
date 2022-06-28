<?php
include('header.php');
include('dbcon.php');
$error ='';

if(isset($_POST['createAcc'])){
    if($_POST['password'] == $_POST['conPswd'])
    {
        $firstname = mysqli_real_escape_string($conDB, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conDB, $_POST['lastname']);
        $username = mysqli_real_escape_string($conDB, $_POST['username']);
        $password = mysqli_real_escape_string($conDB, $_POST['password']);
        $email = mysqli_real_escape_string($conDB, $_POST['email']);

        $sql = "INSERT into user_acc_details (first_name,last_name,username,user_password,email) VALUES('$firstname', '$lastname', '$username', '$password', '$email')";
        $query = mysqli_query($conDB, $sql);
    
        if($query){
            header('Location:internpage.php');
            }else{
            echo 'error: '. mysqli_error($conDB);
        }
    }else{
        $error = 'passwords do not match';
    }
}
?>

<head>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" " rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="desCSS/css/style-registration.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="desCSS/css/font-awesome.min.css" type="text/css" media="all">
</head>
    <body>
        <div class="w3l-signinform">
            <!-- container -->
            <div class="wrapper">
                <!-- main content -->
                <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
                    <div class="w3l-form-info">
                        <div class="w3_info">
                            <br/>
                            <br/>
                            <br/>
                            <h1>Hello, welcome once again!</h1>
                            <p class="sub-para">Create a new account and log into the account to be able to generate your internship letter</p>
                            <h2>Create an Account </h2>
                            <form action="#" method="post">
                                <div class="input-group">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <div class="input-group">
                                    <input type="text" name="firstname" placeholder="First name" required="">
                                    </div>
                                </div>
                                <br />
                                
                                <div class="input-group">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="lastname" placeholder="Last name" required="">
                                </div>
                                <br />
                                <div class="input-group">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="username" placeholder=" Preferred Username" required="">
                                </div>
                                <br />
                                <div class="input-group">
                                    <span><i class="fa fa-envelope-open" aria-hidden="true"></i></span>
                                    <input type="text" name="email" placeholder="Email" required="">
                                </div>
                                <br />
                                <div class="input-group">
                                    <span><i class="fa fa-key" aria-hidden="true"></i></span>
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <br />
                                <div class="input-group">
                                    <span><i class="fa fa-key" aria-hidden="true"></i></span>
                                    <input type="password" name="conPswd" id="conPswd" placeholder="Confirm Password" required>
                                </div>
                                <?php echo $error;?>
                                <br />
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6">
                                            <input type="submit" value="Create Account" name="createAcc" class="btn btn-primary btn-block" />
                                        </div>
                                        <div class="col-lg-4 col-md-6 ">
                                            <input type="reset" value="Clear" class="btn btn-primary btn-block" />
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <p class="account">Already have an account? <a href="login.php">Login</a></p>

                        </div>
                    </div>
                </div>

                <!-- //main content -->
            </div>
            <!-- //container -->
        </div>
    
    <!--<script>
        function validate(){
            var a = document.getElementById("password").value;
            var b = document.getElementById("conPswd").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
    </script>  --> 
</body>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php
include('footer.php'); 
?>
