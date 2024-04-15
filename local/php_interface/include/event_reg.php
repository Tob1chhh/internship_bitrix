<?
AddEventHandler("main", "OnBeforeUserRegister", Array("RegisterHandler", "OnBeforeUserRegisterHandler"));

class RegisterHandler
{
	public static function OnBeforeUserRegisterHandler(&$arFields)
	{
        if($arFields["UF_ROLE"] == 30) {
            $arFields["GROUP_ID"][0] = 7;
        }
        elseif($arFields["UF_ROLE"] == 31) {
            $arFields["GROUP_ID"][0] = 6;
        }
	}
}
?>