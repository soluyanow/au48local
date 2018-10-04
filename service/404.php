<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ошибка 404. Страница не найдена!");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/style_change.css", true);
?>

<div class="error_404">
	<div class="img_404">
		<img src="<?=SITE_TEMPLATE_PATH;?>/img/404.png" alt="Ошибка 404" />
	</div>
	<div class="text_404">
		<div class="title_404">Ошибка 404<br/><span>Страница не найдена</span></div>
		<div class="description_404">Неправильно набран адрес или такой<br/>страницы не существует</div>
		<a href="<?=SITE_DIR;?>" class="url_404">Перейти на главную</a>
		<div class="back_404">или <a href="#" onclick="history.back()">вернуться назад</a></div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>