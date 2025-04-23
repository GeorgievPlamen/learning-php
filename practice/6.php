<form method="POST" action="<?php echo (htmlspecialchars($_SERVER["PHP_SELF"])) ?>">
    <input type="text" name="character" maxlength="1">

    <button type="submit" name="zad6">Test</button>

    <?php
    if (!isset($_POST['zad6'])) {
        return;
    }

    $char = $_POST["character"];
    if ($char == "a" || $char == "e"  ||  $char == "i"  || $char == "o" || $char == "u") {
        echo ("Glasna");
    } else {
        echo ("Suglasna");
    }
    ?>
</form>