<?php
include "../../../config/connection.php";

$genrate_id = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Genrate ID
$genid=substr(str_shuffle($genrate_id), 0, 14);

if (empty(@$_GET['id'])) {
	$id 	=htmlspecialchars(@$_POST['id']);
} else {
	$id 	=htmlspecialchars(@$_GET['id']);
}


if (empty(@$_GET['action'])) {
	$action 	=htmlspecialchars(@$_POST['action']);
} else {
	$action 	=htmlspecialchars(@$_GET['action']);
}

$category_id	=htmlspecialchars(@$_POST['category_id']);
$q_lecturer_description	=htmlspecialchars(@$_POST['q_lecturer_description']);

$create_date	=date('Y-m-d H:i:s');

switch ($action) {			
		case 'input':

			$save=mysqli_query($connect, "INSERT INTO questionnaire_lecturer (
						q_lecturer_id,
						category_id,
						q_lecturer_description,
						create_date)
				VALUES ('$genid',
						'$category_id',
						'$q_lecturer_description',
						'$create_date')");
			if ($save) {
				echo json_encode(array('status'=>'success'));
			} else {			
				echo json_encode(array('status'=>'failed'));
			}
			
			break;

		case 'edit':

			$update=mysqli_query($connect, "UPDATE questionnaire_lecturer SET	
						category_id='$category_id',					
						q_lecturer_description='$q_lecturer_description',
						create_date='$create_date' 
						where q_lecturer_id='$id'");
			if ($update) {
				echo json_encode(array('status'=>'success'));
			} else {			
				echo json_encode(array('status'=>'failed'));
			}
			
			break;

		case 'remove':
			
			$remove=mysqli_query($connect, "DELETE FROM questionnaire_lecturer  
						where q_lecturer_id='$id'");
			if ($remove) {
				echo json_encode(array('status'=>'success'));
			} else {			
				echo json_encode(array('status'=>'failed'));
			}

			break;

}



?>