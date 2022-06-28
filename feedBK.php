<?php 
    include('header.php');
    include('dbcon.php');

    if(isset($_POST['send'])){
        $rating = $_POST['rating_info'];
        $name = $_POST['name'];
        $email = $_POST['email'];
		$comment = $_POST['comment'];

        $sql = "INSERT into feedback (rating,comment,name,email) VALUES('$rating', '$comment', '$name', '$email')";
        $query = mysqli_query($conDB, $sql);
        if($query){
            header('Location:msgFeed.php');
            }
    }
?>

<head>
<title>Feedback</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content=" " />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
               function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
<link href="desCSS/elegantfeedbackform/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
        <br><br>
     <h1 class="agile_head text-center">Feedback for the Website</h1>
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="" method="post" class="agile_form">
		  <h2>How satisfied were you with the website?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="rating_info" value="excellent" id="excellent"> 
				 	  <label for="excellent" >excellent</label>
					   <input type="hidden" value="excellent">
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="rating_info" value="good" id="good" checked="checked"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="rating_info" value="neutral" id="neutral"> 
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="rating_info" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" name="comment" class="w3l_summary"  required=""></textarea>
			<input type="text" placeholder="Your Name" name="name" required="" />
			<input type="email" placeholder="Your Email" name="email" required=""/>
			<input type="submit" name="send" value="send" class="agileinfo" />
	  </form>
	</div>

    </div>	
</body>
<?php include('footer.php');?>
</html>

