<form method="post">
    <input type="number" name="number" id="number">
    <input type="text" name="name" id="name">

    <input type="submit" name="zad3" />

    <?php
    echo ($_POST['name']);
    echo ($_POST['number']);
    ?>
</form>