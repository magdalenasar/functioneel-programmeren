<?php

require_once "./lib/database.php";

function MakeSelectLand()
{
    $sql = "SELECT * FROM land";
    $rows = GetData($sql);

    $selection = "";

    $selection .= "<SELECT id=img_lan_id name=img_lan_id>";

    print $selection;
}


    function MakeSelect($filename, $sql, $list_fields = [], $optional = true)
    {
        $rows = GetData($sql);

        $selection ="";

        $selection .= "<SELECT id=$fieldname name=$fieldname>";

        if ($optional) $selection .= "<option></option>";

        foreach ($rows as $row) {
            $selection .= "<option value='>" . $row[$list_fields[0]] . "'>" . $row[];

    }
        $selection .= "</select>";
    }
