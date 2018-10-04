<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
$APPLICATION->SetPageProperty("keywords", "Ключевые, слова, вашей, страницы");
$APPLICATION->SetPageProperty("description", "Описание страницы");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/style_change.css", true);
?>

<div class="search_wrap">
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

	<div class="search_det_title">
		<h1><?$APPLICATION->IncludeFile(SITE_DIR."include_areas/all_title/search.php", Array(), Array("MODE" => "html","NAME" => "Заголовок"));?></h1>
	</div>
	
	<?$APPLICATION->IncludeComponent(
		"bitrix:search.page", 
		"searchpage", 
		array(
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_TIME" => "3600",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "searchpage",
			"DEFAULT_SORT" => "rank",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FILTER_NAME" => "",
			"NAME_TEMPLATE" => "",
			"NO_WORD_LOGIC" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "modern",
			"PAGER_TITLE" => "Результаты поиска",
			"PAGE_RESULT_COUNT" => "10",
			"RESTART" => "N",
			"SHOW_ITEM_DATE_CHANGE" => "N",
			"SHOW_ITEM_TAGS" => "Y",
			"SHOW_LOGIN" => "Y",
			"SHOW_ORDER_BY" => "N",
			"SHOW_TAGS_CLOUD" => "N",
			"SHOW_WHEN" => "N",
			"SHOW_WHERE" => "N",
			"STRUCTURE_FILTER" => "structure",
			"TAGS_INHERIT" => "Y",
			"USE_LANGUAGE_GUESS" => "Y",
			"USE_SUGGEST" => "N",
			"USE_TITLE_RANK" => "Y",
			"arrFILTER" => array(
				0 => "iblock_redcode_carrepair",
			),
			"arrFILTER_iblock_contacts" => array(
				0 => "all",
			),
			"arrFILTER_iblock_examples" => array(
				0 => "13",
			),
			"arrFILTER_iblock_novostnye" => array(
				0 => "all",
			),
			"arrFILTER_iblock_price_plan" => array(
				0 => "all",
			),
			"arrFILTER_iblock_questions_and_answers" => array(
				0 => "all",
			),
			"arrFILTER_iblock_services" => array(
				0 => "all",
			),
			"arrFILTER_iblock_vacancies" => array(
				0 => "all",
			),
			"arrFILTER_main" => array(
			),
			"arrWHERE" => array(
				0 => "iblock_redcode_news",
				1 => "iblock_redcode_articles",
				2 => "iblock_redcode_projects",
				3 => "iblock_redcode_services",
			),
			"arrFILTER_iblock_shares" => array(
				0 => "all",
			),
			"arrFILTER_iblock_projects" => array(
				0 => "all",
			),
			"arrFILTER_iblock_reviews" => array(
				0 => "all",
			),
			"arrFILTER_iblock_articles" => array(
				0 => "all",
			),
			"arrFILTER_iblock_vacansies" => array(
				0 => "all",
			),
			"arrFILTER_iblock_news" => array(
				0 => "all",
			),
			"TAGS_SORT" => "NAME",
			"TAGS_PAGE_ELEMENTS" => "150",
			"TAGS_PERIOD" => "",
			"TAGS_URL_SEARCH" => "",
			"FONT_MAX" => "50",
			"FONT_MIN" => "10",
			"COLOR_NEW" => "000000",
			"COLOR_OLD" => "C8C8C8",
			"PERIOD_NEW_TAGS" => "",
			"SHOW_CHAIN" => "Y",
			"COLOR_TYPE" => "Y",
			"WIDTH" => "100%",
			"arrFILTER_iblock_redcode_carrepair" => array(
				0 => "18",
				1 => "20",
				2 => "24",
				3 => "26",
			),
		),
		false
	);?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>