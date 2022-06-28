<?php
    include('userheader.php');
    //include('header.php');
    //include('dbcon.php');

?>
<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title container">Generate Internship Letter</h4>
                  <form class="forms-sample" method="post" action="generate_internship_letter.php">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="InputName" placeholder="Name..." required>
                    </div>
                    <div class="form-group">
                      <label>Index Number</label>
                      <input type="number" class="form-control" name="InputIndexNumber" placeholder="Index Number..." required>
                    </div>
                    <div class="form-group">
                      <label>Reference Number</label>
                      <input type="number" class="form-control" name="InputRefNumber" placeholder="Reference Number..."required>
                    </div>
                    <div class="form-group">
                      <label>Year</label>
                        <select class="form-control" name="SelectYear"required>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option selected>Select Year</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" class="form-control" name="InputCompanyName" placeholder="Company Name..."required>
                    </div>
                    <div class="form-group">
                      <label>Company Post Address</label>
                      <input type="text" class="form-control" name="InputCompanyPostAddress" placeholder="Company Post Address..."required>
                    </div>
                    <div class="form-group">
                      <label>Company Location</label>
                      <input type="text" class="form-control" name="InputCompanyLocation" placeholder="Company Location..."required>
                    </div>
                    <button type="submit" name="GenerateLetter" class="btn btn-primary mr-2 container">Generate Letter</button>
                    <button class="btn btn-light container" type="reset">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</section><!-- End About Section -->
</main><!-- End #main -->
<?php include('userfooter.php');?>