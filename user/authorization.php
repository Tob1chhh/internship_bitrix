<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_form", 
	array(
		"COMPONENT_TEMPLATE" => "auth_form",
		"FORGOT_PASSWORD_URL" => "/user/forgot.php",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "/user/registration.php",
		"SHOW_ERRORS" => "N"
	),
	false
);?>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>