<?php 

$action = $_POST['action'];
switch ($action) {
	case 'category':
		$id = $_POST['category_id'];
		require_once 'common_function.php';
		$obj = new Ecommerce();
		$option = $obj->GetSubCategoryData($id);
		$html = '<option value="">Not Available</option>';
		foreach ($option as $key => $options) {
			$html.='<option value="' . $options['id'] . '">' . $options['name'] . '</option>';
		}
		echo $html;
		break;
	
	default:
		// code...
		break;
}

?>