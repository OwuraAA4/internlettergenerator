<?php 
include('adminDashboardViewHead.php'); 
include('dbcon.php');
$user_query = mysqli_query($conDB,"select * from student_details");

?>
<div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Students that have used the site</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Index Number</th>
                                <th>Reference Number</th>
                                <th>Year</th>
                                <th>Company Name</th>
                                <th>Company Location</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                    while($row = mysqli_fetch_array($user_query))
                                        {
                                            $id = $row['id']; 
                                ?>
                            <tr>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['index_number']; ?></td>
                                <td><?php echo $row['reference_number']; ?></td>
                                <td><?php echo $row['year']; ?></td>
                                <td><?php echo $row['company_name']; ?></td>
                                <td><?php echo $row['company_location']; ?></td> 
                            </tr>
                                <?php
                                        }
                                ?>    
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
</div>
<button class="btn btn-primary" id="PrintButton" onclick="PrintPage()">Print</button>
<script type="text/javascript" src="desCSS/js/main.js "></script>
    <script type="text/javascript">
        function PrintPage() {
            window.print();
        }
    </script>
<?php include('adminDashboardViewFooter.php'); ?>