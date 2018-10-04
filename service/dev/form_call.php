<?php
define("NO_KEEP_STATISTIC", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
 
 if(SITE_CHARSET == "windows-1251")
{
	$_REQUEST["user_name"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["user_name"]);
	$_REQUEST["user_phone"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["user_phone"]);
	$_REQUEST["url_img"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["url_img"]);
}

$arEventFields = array( 
	"AUTHOR_NAME" => $_REQUEST['user_name'],
	"AUTHOR_PHONE" => $_REQUEST['user_phone'],
	"URL_IMG" => $_REQUEST['url_img'],
	"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
); 

CEvent::Send("REDCODE_CARREPAIR_CALL_BACK", "s2" , $arEventFields, false, $_REQUEST['template_id']);
?>