<?php

$data = getData();
if (!is_array($data)) {
    $data = [
        "number1" => "",
        "number2" => "",
        "operator" => "",
    ];
}

//RESULT
if (isset($_GET["result"]) && is_string($_GET["result"])) {
    $result = $_GET["result"];
} else {
    $result = "";
}

if ($result === "") {
    saveData([
        "number1" => "",
        "number2" => "",
        "operator" => "",
    ]);
}



//checking btn & is it strin
if (isset($_GET["btn"]) && is_string($_GET["btn"])) {
    $btn = $_GET["btn"];
    $result = $result . $btn;
    //switch decribes cases, with who this variable might be equal
    switch ($btn) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            if ($data["operator"] == "") {
                $data["number1"] = (int) ($data["number1"] . $btn);
            } else {
                $data["number2"] = (int) ($data["number2"] . $btn);
            }
            saveData($data);
            break;
        case "+":
        case "-":
            $data["operator"] = $btn;
            saveData($data);

            break;
        case "minus":
            break;
    }
} else {
    $btn = "";
}

//FUNCTION TO SAVE THE DATA IN JSON FILE
function saveData($data)
{
    $content = json_encode($data);
    file_put_contents("data.json", $content);
}

//FUNCTION TO GET DATA FROM THE JSON FILE
function getData()
{
    $content = file_get_contents("data.json");
    $data = json_decode($content, true);

    return $data;
}
