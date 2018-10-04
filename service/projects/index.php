<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Проекты");
$APPLICATION->SetPageProperty("keywords", "Ключевые, слова, вашей, страницы");
$APPLICATION->SetPageProperty("description", "Описание страницы");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/style_change.css", true);
?>

<div class="projects-right">
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include_areas/bread_crumbs.php",
			"AREA_FILE_RECURSIVE" => "N",
			"EDIT_MODE" => "html",
		),
		false,
		Array('HIDE_ICONS' => 'N')
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog", 
		"projects", 
		array(
			"ACTION_VARIABLE" => "action",
			"ADD_ELEMENT_CHAIN" => "Y",
			"ADD_PICT_PROP" => "-",
			"ADD_PROPERTIES_TO_BASKET" => "Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"BASKET_URL" => "/personal/basket.php",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COMPONENT_TEMPLATE" => "projects",
			"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
			"DETAIL_BACKGROUND_IMAGE" => "-",
			"DETAIL_BRAND_USE" => "N",
			"DETAIL_BROWSER_TITLE" => "-",
			"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
			"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
			"DETAIL_DISPLAY_NAME" => "Y",
			"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
			"DETAIL_META_DESCRIPTION" => "-",
			"DETAIL_META_KEYWORDS" => "-",
			"DETAIL_PROPERTY_CODE" => array(
				0 => "STEPS",
				1 => "",
			),
			"DETAIL_SET_CANONICAL_URL" => "N",
			"DETAIL_USE_COMMENTS" => "N",
			"DETAIL_USE_VOTE_RATING" => "N",
			"DISABLE_INIT_JS_IN_COMPONENT" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"ELEMENT_SORT_FIELD" => "name",
			"ELEMENT_SORT_FIELD2" => "id",
			"ELEMENT_SORT_ORDER" => "asc",
			"ELEMENT_SORT_ORDER2" => "desc",
			"FILTER_VIEW_MODE" => "VERTICAL",
			"IBLOCK_ID" => "24",
			"IBLOCK_TYPE" => "redcode_carrepair",
			"INCLUDE_SUBSECTIONS" => "Y",
			"LABEL_PROP" => "-",
			"LINE_ELEMENT_COUNT" => "3",
			"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
			"LINK_IBLOCK_ID" => "",
			"LINK_IBLOCK_TYPE" => "",
			"LINK_PROPERTY_SID" => "",
			"LIST_BROWSER_TITLE" => "-",
			"LIST_META_DESCRIPTION" => "-",
			"LIST_META_KEYWORDS" => "-",
			"LIST_PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"MESSAGE_404" => "",
			"MESS_BTN_ADD_TO_BASKET" => "В корзину",
			"MESS_BTN_BUY" => "Купить",
			"MESS_BTN_COMPARE" => "Сравнение",
			"MESS_BTN_DETAIL" => "Подробнее",
			"MESS_NOT_AVAILABLE" => "Нет в наличии",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "modern",
			"PAGER_TITLE" => "Проекты",
			"PAGE_ELEMENT_COUNT" => "9",
			"PARTIAL_PRODUCT_PROPERTIES" => "N",
			"PRICE_CODE" => array(
			),
			"PRICE_VAT_INCLUDE" => "N",
			"PRICE_VAT_SHOW_VALUE" => "N",
			"PRODUCT_ID_VARIABLE" => "id",
			"PRODUCT_PROPERTIES" => array(
			),
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"PRODUCT_QUANTITY_VARIABLE" => "",
			"SECTIONS_SHOW_PARENT_NAME" => "Y",
			"SECTIONS_VIEW_MODE" => "LIST",
			"SECTION_BACKGROUND_IMAGE" => "-",
			"SECTION_COUNT_ELEMENTS" => "N",
			"SECTION_ID_VARIABLE" => "",
			"SECTION_TOP_DEPTH" => "2",
			"SEF_FOLDER" => SITE_DIR."projects/",
			"SEF_MODE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_STATUS_404" => "Y",
			"SET_TITLE" => "N",
			"SHOW_404" => "Y",
			"SHOW_ALL_WO_SECTION" => "Y",
			"SHOW_DEACTIVATED" => "N",
			"SHOW_PRICE_COUNT" => "1",
			"SHOW_TOP_ELEMENTS" => "N",
			"SIDEBAR_DETAIL_SHOW" => "N",
			"SIDEBAR_PATH" => "",
			"SIDEBAR_SECTION_SHOW" => "N",
			"TEMPLATE_THEME" => "blue",
			"TOP_ELEMENT_COUNT" => "9",
			"TOP_ELEMENT_SORT_FIELD" => "sort",
			"TOP_ELEMENT_SORT_FIELD2" => "id",
			"TOP_ELEMENT_SORT_ORDER" => "asc",
			"TOP_ELEMENT_SORT_ORDER2" => "desc",
			"TOP_LINE_ELEMENT_COUNT" => "3",
			"TOP_PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"TOP_VIEW_MODE" => "SECTION",
			"USE_COMPARE" => "N",
			"USE_ELEMENT_COUNTER" => "N",
			"USE_FILTER" => "N",
			"USE_MAIN_ELEMENT_SECTION" => "N",
			"USE_PRICE_COUNT" => "N",
			"USE_PRODUCT_QUANTITY" => "N",
			"USE_STORE" => "N",
			"FILE_404" => "",
			"SEF_URL_TEMPLATES" => array(
				"sections" => "",
				"section" => "#SECTION_CODE#/",
				"element" => "#SECTION_CODE#/#ELEMENT_ID#/",
				"compare" => "compare.php?action=#ACTION_CODE#",
				"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
			),
			"VARIABLE_ALIASES" => array(
				"compare" => array(
					"ACTION_CODE" => "action",
				),
			)
		),
		false
	);?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>