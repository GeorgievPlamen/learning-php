<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    <input type="number" name="number" id="number" />
    <button type="submit" name="test">test</button>

    <?php
    if (!isset($_POST["test"])) {
        return;
    }

    $num = $_POST["number"];
    if (!isset($num) || $num <= 0) {
        return;
    }

    $a = 1;
    $sum = 0;
    do {
        $sum += $a;
        $a++;
    } while ($a <= $num)
    ?>
</form>