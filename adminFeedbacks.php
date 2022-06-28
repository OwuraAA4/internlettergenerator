<?php 
include('adminDashboardViewHead.php'); 
include('dbcon.php');
$user_query = mysqli_query($conDB,"select * from feedback");

?>
<div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Response from Users</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Performance of site</th>
                                <th>Other Comments</th>
                                <th>Sender's Name</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                    while($row = mysqli_fetch_array($user_query))
                                        {
                                            $id = $row['id']; 
                                ?>
                            <tr>
                                <td><?php echo $row['rating'];?></td>
                                <td><?php echo $row['comment']; ?></td>
                                <td><?php echo $row['email']; ?></td> 
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
<?php include('adminDashboardViewFooter.php'); ?>