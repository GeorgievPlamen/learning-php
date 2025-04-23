<form method="post">
    <input type="text" name="a" id="a">
    <input type="text" name="b" id="b">
    <button type="submit">Submit</button>
    <?php

    if (!isset($_POST['a'])) {
        echo ("a is not set");

        return;
    }

    if (!isset($_POST['b'])) {
        echo ('b is not set');

        return;
    }

    if ($_POST['a'] < $_POST['b']) {
        echo ("a is less then b");
    } else {
        echo ("b is bigger");
    }
    ?>
</form>