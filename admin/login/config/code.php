<?php include '../../../config/config.php';?>

<?php
$action=$_POST['action'];

switch ($action){

	case 'login':
		$_SESSION['staff_id']=trim($_POST['staff_id']);
		$_SESSION['access_key']=trim($_POST['access_key']);
		$_SESSION['role_id']=trim($_POST['role_id']);
	break;


	case 'get_page':
		$staff_id=$_POST['staff_id'];
		$page=$_POST['page'];
		include 'page-content.php';
	break;

	case 'get_page_with_id':
		$page=$_POST['page'];
		include 'page-content.php';
	break;

	// case 'reset_password':
	// 	$page=$action;
	// 	require_once('page-content.php');
	// break;

	case 'reset_password':
		$staff_id=$_POST['staff_id'];
		$page=$action;
		require_once('page-content.php');
	break;
}
?>