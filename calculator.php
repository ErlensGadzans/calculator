<?php


if (isset($_GET["result"]) && is_string($_GET["result"])) {
    $result = $_GET["result"];
} else {
    $result = "";
}

//checking btn & is it strin
if (isset($_GET["btn"]) && is_string($_GET["btn"])) {
    $btn = $_GET["btn"];
    $result = $result . $btn;
    //switch decribes cases, with who this variable might be equal
    switch ($btn) {
        case 1:
            echo $result;
            break;
        case 2:
            echo $result;
            break;
        case 3:
            echo $result;
            break;
        case 4:
            echo $result;
            break;
        case 5:
            echo $result;
            break;
        case 6:
            echo $result;
            break;
        case 7:
            echo $result;
            break;
        case 8:
            echo $result;
            break;
        case 9:
            echo $result;
            break;
        case "plus":
            echo $result;
            break;
        case "minus":
            echo $result;
            break;
    }
} else {
    $btn = "";
}
