<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?$APPLICATION->IncludeComponent("aspro:oneclickbuy.mshop", "shop", array(
	"USE_QUANTITY" => "N",
	"SHOW_DELIVERY_NOTE" => COption::GetOptionString('aspro.mshop', 'ONECLICKBUY_SHOW_DELIVERY_NOTE', 'N', SITE_ID),
	"PROPERTIES" => (strlen($tmp = COption::GetOptionString('aspro.mshop', 'ONECLICKBUY_PROPERTIES', 'FIO,PHONE,EMAIL,COMMENT', SITE_ID)) ? explode(',', $tmp) : array()),
	"REQUIRED" => (strlen($tmp = COption::GetOptionString('aspro.mshop', 'ONECLICKBUY_REQUIRED_PROPERTIES', 'FIO,PHONE', SITE_ID)) ? explode(',', $tmp) : array()),
	"DEFAULT_PERSON_TYPE" => COption::GetOptionString('aspro.mshop', 'ONECLICKBUY_PERSON_TYPE', '1', SITE_ID),
	"DEFAULT_DELIVERY" => COption::GetOptionString('aspro.mshop', 'ONECLICKBUY_DELIVERY', '2', SITE_ID),
	"DEFAULT_PAYMENT" => COption::GetOptionString('aspro.mshop', 'ONECLICKBUY_PAYMENT', '1', SITE_ID),
	"DEFAULT_CURRENCY" => COption::GetOptionString('aspro.mshop', 'ONECLICKBUY_CURRENCY', 'RUB', SITE_ID),
	"USE_SKU" => "N",
	"CACHE_TYPE" => "Y",
	"CACHE_TIME" => "36000",
	"SEF_FOLDER" => SITE_DIR."catalog/",
	"BUY_ALL_BASKET" => "Y",
	),
	false
);?>
