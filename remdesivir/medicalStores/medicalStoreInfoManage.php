<?php
	require("../../connection.php");
	
	//$id = isset($_POST['id']) ? $_POST['id'] : "";
	$medicalStoreId = $_POST['medicalStoreId'];
	
	$availableRemdesivir = $_POST['availableRemdesivir'];
	
	if($medicalStoreId != ""){
		// edit functionality
		$sqlEdit = "update medicalStores set availableRemdesivir = $availableRemdesivir where medicalStoreId = $medicalStoreId";
		$conn -> query($sqlEdit);
	}
	header('location:medicalStores.php');
?>