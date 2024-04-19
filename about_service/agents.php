<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Агенты");
$APPLICATION->SetPageProperty("keywords", "агенты");
$APPLICATION->SetPageProperty("description", "Информация об агентах");
$APPLICATION->SetTitle("Агенты недвижимости");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	".default", 
	array(
		"AGENTS_COUNT" => "2",
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"HLBLOCK_TNAME" => "hl_agents"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>