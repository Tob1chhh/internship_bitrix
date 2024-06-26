<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
CJSCore::Init();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

/*
 * Для постраничной навигации использовать компонент bitrix:main.pagenavigation
 */
?>

<div class="site-section site-section-sm bg-light">
    <div class="container agents-list">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h2><?=GetMessage("PAGE_NAME")?></h2>
            </div>
          </div>
        </div>
        <? foreach($arResult["AGENTS"]["ITEMS"] as $agent) { ?>
        <div class="mb-5">
            <div class="agent__card">
                <div class="small-info">
                    <? if (isset($agent["UF_PHOTO"])) { ?>
                        <div class="avatar" style="background-image: url(<?=$agent["UF_PHOTO"]?>);"></div>
                    <? } else { ?>
                        <div class="avatar" style="background-image: url(/local/components/mcart/agents.list/templates/.default/images/no_avatar.png);"></div>
                    <? } ?>
                    <div class="info">
                        <div class="name"><?=$agent["UF_SNP"]?></div>
                    </div>
                </div>
                <div class="agent__card_item">
                    <div class="agent__card_info">
                        <div class="card__info_item">
                            <div class="position"><?=GetMessage("AGENT_EMAIL")?></div>
                            <div class="name"><?=$agent["UF_EMAIL"]?></div>
                        </div>
                        <div class="card__info_item">
                            <div class="position"><?=GetMessage("AGENT_PHONE")?></div>
                            <div class="name"><?=$agent["UF_PHONE"]?></div>
                        </div>
                        <div class="card__info_item">
                            <div class="position"><?=GetMessage("AGENT_TYPE")?></div>
                            <div class="name"><?=$agent["UF_TYPE"]?></div>
                        </div>
                    </div>
                </div>
                <?if (isset($arResult["STAR_AGENTS"])) { ?>
                    <? $is_favourite = 0;?>
                    <? foreach($arResult["STAR_AGENTS"] as $ids_agents) { ?>
                        <? if ($ids_agents == $agent["ID"]) { ?>
                            <a class="star active" data-agent_id=<?=$agent["ID"]?>>
                            <? $is_favourite = 1; ?>
                        <? } ?>
                    <? } ?>
                    <? if($is_favourite == 0) { ?>
                        <a class="star" data-agent_id=<?=$agent["ID"]?>>
                    <? } ?>
                <? } ?>
                    <svg id='svg' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
        <? } ?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.pagenavigation",
            "pagenav",
            array(
                "NAV_OBJECT" => $arResult["AGENTS"]["NAV_OBJECT"],
                "SEF_MODE" => "N",
            ),
            false
        );?>

    </div>
</div>
