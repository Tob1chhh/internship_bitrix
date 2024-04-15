<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>

<div class="site-section">
<div class="container">
<div class="row" style="display: flex; justify-content: center;">
<div class="col-md-12 col-lg-8 mb-5">

    <?$APPLICATION->IncludeComponent("bitrix:system.auth.registration", "reg_form", Array(
	    "AUTH" => "Y",
		"COMPONENT_TEMPLATE" => "reg_form",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
			3 => "UF_ROLE",
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
            3 => "UF_ROLE",
		),
        "SUCCESS_PAGE" => '/',
		"USER_PROPERTY" => array(
			0 => "UF_ROLE",
		),
		"USER_PROPERTY_NAME" => "",
	),
	false
);?>

</div>
</div>
</div>
</div>
<br>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>