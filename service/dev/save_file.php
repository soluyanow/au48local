<?php
define("NO_KEEP_STATISTIC", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$error = false;
$max_file_size = 4 * 1024 * 1024; /* 4Мб для загружаемого файла */

foreach($_FILES as $file){
	if($file["size"] > $max_file_size){
		$error = true;
		break;
	}

	$propertyFile = array(
		"name" => $file['name'],
		"size" => $file['size'],
		"type" => $file['type'],
		"tmp_name" => $file['tmp_name'],
	);
	$fileInformation[] = CFile::SaveFile($propertyFile, "summary/");
	$fileInformation[] = $file['name'];
}

if($error)
	echo json_encode($error);
else
	echo json_encode($fileInformation);
?>