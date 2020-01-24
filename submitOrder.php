<?php
	include 'class/db.php';
	include 'class/controller.php';

	$id = $_POST['patient_id'];
	$names = $_POST['names'];
	$quantities = $_POST['quantities'];

	$object = new Controller;
	if($object->insertOrder($id,$names,$quantities)){
		echo "
			<div class='alert alert-success'>
				Success!
			</div>
		";
	}else{
		echo "
			<div class='alert alert-danger'>
				Failed!
			</div>
		";
	}

?>