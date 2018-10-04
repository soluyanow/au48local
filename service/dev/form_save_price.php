<?php
define("NO_KEEP_STATISTIC", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
 
if(SITE_CHARSET == "windows-1251")
{
	$_REQUEST["user_email"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["user_email"]);
	$_REQUEST["save_price"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["save_price"]);
	$_REQUEST["url_img"] = iconv("UTF-8", "WINDOWS-1251", $_REQUEST["url_img"]);
}

$arEventFields = array( 
	"AUTHOR_EMAIL" => $_REQUEST['user_email'],
	"SAVE_PRICE" => $_REQUEST['save_price'],
	"URL_IMG" => $_REQUEST['url_img'],
); 

CEvent::Send("REDCODE_CARREPAIR_SAVE_PRICE", "s2" , $arEventFields, false, $_REQUEST['template_id']);
?>