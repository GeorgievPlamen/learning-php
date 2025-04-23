<form method="POST" action="<?php echo (htmlspecialchars($_SERVER["PHP_SELF"])) ?>">
    <input type="number" max="7" min="1" name="day" />
    <button type="submit" name="dayOfWeek">Submit</button>

    <?php
    if (!isset($_POST['dayOfWeek'])) {
        echo ("Day of week is not set!");
        return;
    }

    $day = $_POST['day'];

    switch ($day) {
        case 1:
            $result = "Ponedelnik";
            break;
        case 2:
            $result = "Vtornik";
            break;
        case 3:
            $result = "Srqda";
            break;
        case 4:
            $result = "Chetvurtuk";
            break;
        case 5:
            $result = "Petuk";
            break;
        case 6:
            $result = "Subota";
            break;
        case 7:
            $result = "Nedelq";
            break;
        default:
            $result = "Trqbva da e chislo ot 1 do 7";
            break;
    }

    echo $result;
    ?>
</form>