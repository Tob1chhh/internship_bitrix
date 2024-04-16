<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

 $arComponentDescription = array(
    "NAME" => GetMessage("HL_BLOCK_AGENTS_LIST"),
	"DESCRIPTION" => GetMessage("HL_BLOCK_AGENTS_LIST_DESC"),
    "PATH" => array(
        "ID" => GetMessage("HL_BLOCK_AGENTS_PATH_ID"),
        "CHILD" => array(
           "ID" => "Highload-block",
           "NAME" => GetMessage("HL_BLOCK_AGENTS_PATH_NAME"),
           "SORT" => 11
        )
     ),
);