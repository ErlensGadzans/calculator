<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>

<body>


    <?php include("calculator.php"); ?>
    <div class="result"><?= $result ?></div>
    <div class="calc_grid">

        <?php $values = [7, 8, 9, "+", 4, 5, 6, "-",  1, 2, 3, "="];



        foreach ($values as $value) {

        ?> <a href="?<?= http_build_query(["btn" => $value, "result" => $result]); ?>"><?= $value; ?></a>


        <?php
        }

        ?>
    </div>

    <div class="reset_btn">
        <a href="?reset=true">C</a>
    </div>

</body>