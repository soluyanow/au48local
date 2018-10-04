<?php
define("NO_KEEP_STATISTIC", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
 
if(SITE_CHARSET == "windows-1251")
{
	$_REQUEST["order_name"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["order_name"]);
	$_REQUEST["order_phone"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["order_phone"]);
	$_REQUEST["order_date"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["order_date"]);
	$_REQUEST["order_time"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["order_time"]);
	$_REQUEST["order_jobs"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["order_jobs"]);
	$_REQUEST["url_img"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["url_img"]);
}

$arEventFields = array( 
	"AUTHOR_NAME" => $_REQUEST['order_name'],
	"AUTHOR_PHONE" => $_REQUEST['order_phone'],
	"DATE" => $_REQUEST['order_date'],
	"TIME" => $_REQUEST['order_time'],
	"AUTHOR_TEXT" => $_REQUEST['order_jobs'],
	"URL_IMG" => $_REQUEST['url_img'],
	"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
); 

CEvent::Send("REDCODE_CARREPAIR_ASSESSMENT_WORK", "s2" , $arEventFields, false, $_REQUEST['template_id']);
?>