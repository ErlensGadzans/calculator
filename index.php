<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>

<body>

    <div class="result">
        <?php include("calculator.php"); ?>
    </div>
    <div class="calc_grid">
        <a href="?btn=7&result=<?= $result ?>">7</a>
        <a href="?btn=8&result=<?= $result ?>">8</a>
        <a href="?btn=9&result=<?= $result ?>">9</a>
        <a href="?btn=reset&result=<?= $result ?>">AC</a>


        <a href="?btn=4&result=<?= $result ?>">4</a>
        <a href="?btn=5&result=<?= $result ?>">5</a>
        <a href="?btn=6&result=<?= $result ?>">6</a>
        <a href="?btn=plus&result=<?= $result ?>">+</a>


        <a href="?btn=1&result=<?= $result ?>">1</a>
        <a href="?btn=2&result=<?= $result ?>">2</a>
        <a href="?btn=3&result=<?= $result ?>">3</a>
        <a href="?btn=minus&result=<?= $result ?>">-</a>
    </div>

    <div class="btn_result">
        <a href="?btn=enter&result=<?= $result ?>">=</a>
    </div>

</body>