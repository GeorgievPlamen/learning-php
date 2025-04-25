<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    <input type="humber" name="number" />

    <button type="submit" name="input">Test</button>

    <?php
    if (!isset($_POST["input"])) {
        echo ("Input is not set");
        return;
    }

    $num = $_POST["number"];

    $sum = 0;
    $numDigits = strlen($num);

    $i = 0;

    while ($i < $numDigits) {
        $sum += intval($number[$i]);
    }

    ?>
</form>