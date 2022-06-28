<?php
    //include('dbcon.php');

    if(isset($_POST['GenerateLetter'])){
        $name = $_POST['InputName'];
        $index_number = $_POST['InputIndexNumber'];
        $reference_number = $_POST['InputRefNumber'];
        $year = $_POST['SelectYear'];
        $company_name = $_POST['InputCompanyName'];
        $company_post_address = $_POST['InputCompanyPostAddress'];
        $company_location = $_POST['InputCompanyLocation'];

        /*$sql = "INSERT into student_details (name,index_number,reference_number,year,company_name,company_post_address,company_location) VALUES('$name', '$index_number','$reference_number', '$year','$company_name','$company_post_address', '$company_location')";
        $query = mysqli_query($conDB, $sql);*/
    }          
    
    if(isset($_POST['GenerateLetter']))
    {
            $studentYear;
            if($_POST['SelectYear'] == 1){
                $studentYear = "first year";
            }else if($_POST['SelectYear'] == 2){
                $studentYear = "second year";
            }else if($_POST['SelectYear'] == 3){
                $studentYear = "third year";
            }else{
                $studentYear = "final year";
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="desCSS/css_1/Style.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="dist/img/AdminLTELogo.png" />
    <link href="desCSS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <title>Generate Internship Letter</title>
    <style>	
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
            #PrintButton {
				display: none;
			}
		}
 
		@page {
			size: auto;   /* auto is the initial value */
			margin: 15px;  /* this affects the margin in the printer settings */
            
		}
	</style>
</head>
<body>
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h6>
                <a href="internpage.php"><img src="desCSS/img/KNUST LOGO 2-01.png" alt="KNUST Logo" class="img-fluid"></a>
                <span>Kwame Nkrumah University of Science and Technology, Kumasi</span>
                </h6>
            </div>
        </div>
    </header>
    <hr>
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <h6>DEPARTMENT OF COMPUTER SCIENCE</h6>
                    <div class="row">
                        <div class="col l8">
                            Our Ref: DCS. /30/Vol.4
                        </div>
                        <div class="col l4">
                            Your Ref ................... Date:<?php include_once('time.php');?>
                        </div>
                    </div>
                    <br><br>
                    <div class="">
                        The Manager<br><?php echo $_POST['InputCompanyName'] ;?><br><?php echo $_POST['InputCompanyPostAddress'] ;?><br><?php echo $_POST['InputCompanyLocation'] ;?>
                    </div>
                    <section>
                        Dear Sir,<br><br>
                    </section>
                    <h6 class="font-weight-bold text-decoration-underline">VACATION TRAINING</h6>
                    <p>
                        <?php echo $_POST['InputName'] ;?> with student index number <?php echo $_POST['InputIndexNumber'] ;?> and reference number <?php echo $_POST['InputRefNumber'] ;?> 
                        is a <?php echo $studentYear;?> undergraduate student of the 
                        Department of Computer Science, Kwame Nkrumah University of Science and Technology KNUST, Kumasi.
                    </p>
                    <p>
                        <?php echo $_POST['InputName'] ;?> has expressed interest in undertaking a vacation attachment with your company during the second semester holidays from 
                        .
                    </p>   
                    <p>
                        It would be greatly appreciated if you could extend to him the necessary assistance for the period.
                    </p>
                    <br>
                    Thank you
                    <br><img src="desCSS/images/PhpPics/Signature-01.png" width="100" height="120">
                    <p class="c">J.A. Hayfron</p>
                    <button class="btn btn-primary" id="PrintButton" onclick="PrintPage()">Print</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <script type="text/javascript" src="desCSS/js/main.js "></script>
    <script type="text/javascript">
        function PrintPage() {
            window.print();
        }
    </script>
</body>
</html>