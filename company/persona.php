<?
/**
 * Powered by Artem Koorochka
 * @var global $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/company/leaders.php");
$APPLICATION->SetTitle(GetMessage("COMPANY_TITLE"));
$APPLICATION->IncludeComponent("koorochka:persona", ".default", Array(

    )
);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>