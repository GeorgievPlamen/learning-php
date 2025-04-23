<form method="post">
    <input type="a" name="a" />
    <input type="b" name="b" />

    <button type="submit">check</button>


    <?php
    if (!isset($_POST['a'])) {
        return;
    }

    if (!isset($_POST['b'])) {
        return;
    }

    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($a > $b) {
        echo ($a);
    } else {
        echo ($b);
    }
    ?>
</form>