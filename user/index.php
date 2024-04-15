<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if(isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"]) > 0)
    LocalRedirect($backurl);

$APPLICATION->SetTitle("Пользователь");
?>
<br>
<p>Вы успешно авторизованы!</p><br>
<p><a href="<?=SITE_DIR?>">На главную</a></p>
<br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>