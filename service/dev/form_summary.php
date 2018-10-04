<?php
define("NO_KEEP_STATISTIC", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(SITE_CHARSET == "windows-1251")
	$_REQUEST["name_summary"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["name_summary"]);

$arEventFields = array(
	"SUMMARY_NAME" => $_REQUEST['name_summary'],
	"URL_IMG" => $_REQUEST['url_img'],
	"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
);

$fileID = array(0 => $_REQUEST["fileID"]);

CEvent::SendImmediate("REDCODE_CARREPAIR_SUMMARY", "s2", $arEventFields, false, $_REQUEST['template_id'], $fileID);
CFile::Delete($_REQUEST["fileID"]);
?>