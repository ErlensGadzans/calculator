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
            if ($data['number2'] === '') {
                if ($data['number1'] === '') {
                    $btn = '';
                } elseif ($data['operator'] == '') {
                    $data['operator'] = $btn;
                } else {
                    $btn = '';
                }
            } else {
                $result = getResult($data["number1"], $data["number2"], $data["operator"]);
                $data = [
                    "number1" => $result,
                    "number2" => "",
                    "operator" => "",
                ];
                saveData($data);
                $btn = "";
            }
            saveData($data);
            break;
        case "=":
            if ($data["number2"] != "") {
                $result = getResult($data["number1"], $data["number2"], $data["operator"]);

                $data = [
                    "number1" => $result,
                    "number2" => "",
                    "operator" => "",
                ];
                saveData($data);
                $btn = "";
            }
            break;
    }
    $result = $result . $btn;
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


function getResult($number1, $number2, $operator)
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
    }
}
