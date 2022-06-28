<?php 
include_once('adminDashboardViewHead.php');
include('dbcon.php');

$show_report = "";
if(isset($_GET['submit'])){
    $show_report = 1;
$name = $_GET['search'];
$sqlquery= "SELECT * FROM evaluator_assess
WHERE Intern_name LIKE '%$name%'";
$query = mysqli_query($conDB,$sqlquery);
}
?>
<section>
    <nav class="navbar navbar-light">
        <div>
            <em><b>SEARCH STUDENT NAME HERE FOR ASSESSMENT OF INTERNSHIP :</b></em>
        </div>
        <form class="form-inline ml-4" method="get" action="">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-navbar" name="submit" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                </div>
            </div>
        </form>
    </nav>
</section>
<div class="col-12">
    <?php
        if($show_report == 1){
    ?>
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Evaluation of Student</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
                if(mysqli_num_rows($query) < 1){
                    echo "No data Available";
                }else
                {
                    while($row = mysqli_fetch_array($query)){
            ?>
                <div class="mb-3">
                    <label for="Intern_name">Intern's Name:</label>
                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" value="<?php echo $row['intern_name'];?>" >
                </div>
                <div class="mb-3">
                    <label for="company">Name of Company:</label>
                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" value="<?php echo $row['company'];?>">
                </div>
                <div class="mb-3">
                    <label for="supervisor">Supervisor's name:</label>
                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" value="<?php echo $row['supervisor'];?>">
                </div>
                <div class="mb-3">
                    <label for="position">Intern’s Position or Assignment:</label>
                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" value="<?php echo $row['position'];?>">
                </div>
                <div>
                    <table>
                        <tr>
                            <td><strong>1 - General Workplace Performance</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="first-col">Attendance</td>
                            <td></td>
                            <td><?php echo $row['equipment'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Punctuality</td>
                            <td></td>
                            <td><?php echo $row['needs'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Appropriate dress</td>
                            <td></td>
                            <td><?php echo $row['resources'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Attitude</td>
                            <td></td>
                            <td><?php echo $row['equipments'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Acceptance of criticism</td>
                            <td></td>
                            <td><?php echo $row['equip'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Asks appropriate questions</td>
                            <td></td>
                            <td><?php echo $row['equipment_1'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Self-motivated</td>
                            <td></td>
                            <td><?php echo $row['self_motivate'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Practices ethical behaviour</td>
                            <td></td>
                            <td><?php echo $row['prac_behaviour'];?></td>
                        </tr>
                        <br/>
                        <tr>
                            <td><strong>2 - Specific Job Assignment Performance</strong></tr></td>
                            <td></td>            
                        <tr>
                            <td class="first-col">Sufficient knowledge to perform tasks</td>
                            <td></td>
                            <td><?php echo $row['knowledge'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Verbal communication skills</td>
                            <td></td>
                            <td><?php echo $row['effectively'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Written communication skills</td>
                            <td></td>
                            <td><?php echo $row['students'];?></td>
                        </tr>
                        <tr>                            
                            <td class="first-col">Analytical skills</td>
                            <td></td>
                            <td><?php echo $row['participate'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Use of  technical skills required for the position</td>
                            <td></td>
                            <td><?php echo $row['part_cipate'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Meets deadlines</td>
                            <td></td>
                            <td><?php echo $row['deadline'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Initiative to get a job done, including overcoming obstacles</td>
                            <td></td>
                            <td><?php echo $row['jobs'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Sets priorities</td>
                            <td></td>
                            <td><?php echo $row['set_priorities'];?></td>
                        </tr>
                        <br/>
                        <tr>
                            <td><strong>3 - Assessment of intern’s overall performance?</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="first-col">Overall Performance of Intern</td>
                            <td></td>
                            <td><?php echo $row['over_all'];?></td>
                        </tr>
                        <p><strong>PART II</strong><br>
			
                        <tr>
                            <td class="first-col">Strength of Intern</td>
                            <td></td>
                            <td><?php echo $row['strength'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Area that needs improving</td>
                            <td></td>
                            <td><?php echo $row['question'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Recommendations</td>
                            <td></td>
                            <td><?php echo $row['recommend'];?></td>
                        </tr>
                        <tr>
                            <td class="first-col">Other comments</td>
                            <td></td>
                            <td><?php echo $row['comments'];?></td>
                        </tr>
                    </table>
                </div>
                    <hr><br>
            <?php 
                    }
                }
            ?>
            
        </div>
        <!-- /.card-body -->
    </div>
        <?php
            }
        ?>
                    <!-- /.card -->
</div>

<?php 
include('adminDashboardViewFooter.php');
?>