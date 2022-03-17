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
            break;
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            break;
        case 7:
            break;
        case 8:
            break;
        case 9:
            break;
        case "plus":
            break;
        case "minus":
            break;
    }
} else {
    $btn = "";
}
