<?php 
include('dbcon.php');
//dbcon();
	if(isset($_POST['submit']))
	{
		$Intern_name = $_POST['Intern_name'];
		$company = $_POST['company'];
		$supervisor = $_POST['supervisor'];
		$position = $_POST['position'];
		$deadline = $_POST['deadline'];
		$equipment = $_POST['equipment'];
		$needs = $_POST['needs'];
		$resources = $_POST['resources'];
		$equipments = $_POST['equipments'];
		$equip = $_POST['equip'];
		$equipment_1 = $_POST['equipment_1'];
		$self_motivate = $_POST['self_motivate'];
		$prac_behaviour = $_POST['prac_behaviour'];
		$knowledge = $_POST['knowledge'];
		$effectively = $_POST['effectively'];
		$students = $_POST['students'];
		$participate = $_POST['participate'];
		$part_cipate = $_POST['part_cipate'];
		$jobs = $_POST['jobs'];
		$set_priorities = $_POST['set_priorities'];
		$over_all = $_POST['over_all'];
		$strength = $_POST['strength'];
		$question = $_POST['question'];
		$recommend = $_POST['recommend'];
		$comments = $_POST['comments'];
		//var_dump($equipment_1);exit;

		$query = mysqli_query($conn,"INSERT into evaluator_assess (intern_name,company,supervisor,position,equipment,needs,resources,equipments,equip,equipment_1,
		self_motivate,prac_behaviour,knowledge,effectively,students,participate,part_cipate,deadline,jobs,set_priorities,over_all,strength,question
		,recommend,comments) 
        values('$Intern_name','$company','$supervisor','$position','$equipment','$needs','$resources','$equipments','$equip','$equipment_1','
		$self_motivate','$prac_behaviour','$knowledge','$effectively','$students','$participate','$part_cipate','$deadline','$jobs','$set_priorities',
		'$over_all','$strength','$question','$recommend','$comments')")or die(mysqli_error($conn));
		//var_dump($query);exit;

		if($query){
			header('Location:evaluation.php');
		}
	}
?>