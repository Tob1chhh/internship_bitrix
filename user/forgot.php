<?define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Забыли пароль");?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.forgotpasswd",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>