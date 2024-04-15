<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_form", Array(
	"COMPONENT_TEMPLATE" => "auth_form",
		"FORGOT_PASSWORD_URL" => "/user/forgot.php",	// Страница забытого пароля
		"PROFILE_URL" => "",	// Страница профиля
		"REGISTER_URL" => "/user/registration.php",	// Страница регистрации
		"SHOW_ERRORS" => "N",	// Показывать ошибки
	),
	false
);?>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>