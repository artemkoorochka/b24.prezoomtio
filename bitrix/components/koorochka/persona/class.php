<?
class koorochkaPersona extends CBitrixComponent
{

    public function executeComponent()
    {
        $this->arResult = array(
            "NAME" => "Artem",
            "LAST_NAME" => "Koorochka",
            "GENDER" => "Man",
            "EMAIL" => "artem@koorochka.com",
            "CONTEXT" => "Company",
            "STATUS" => "Not busy",
            "ROLE" => "Programmer"
        );

        $this->includeComponentTemplate();
    }
}
?>