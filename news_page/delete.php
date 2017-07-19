<?php
	
	header('Content-type: application/json; charset=UTF-8');
	
	$response = array();
	
	if ($_POST['delete']) {
		
		require_once 'dbconfig.php';
		

		$pid = intval($_POST['delete']);


		$stmt_select = $DB_con->prepare("SELECT new_photo FROM asawa_new WHERE new_id=:pid");
		$stmt_select->execute(array(':pid'=>$pid));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
          	
		unlink("new_images/".$imgRow['new_photo']); 
		

		$query = "DELETE FROM asawa_new WHERE new_id=:pid";
		$stmt = $DB_con->prepare( $query );
		$stmt->execute(array(':pid'=>$pid));
		
		if ($stmt) {
			$response['status']  = 'success';
			$response['message'] = 'News Deleted Successfully ...';
		} else {
			$response['status']  = 'error';
			$response['message'] = 'Unable to delete product ...';
		}
		echo json_encode($response);
		
	}