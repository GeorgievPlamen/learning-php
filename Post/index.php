<?php
$title = "POST Input";

include("../includes/header.php");
require_once("../includes/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email == false) {
        $status = "Please eneter a valid email";
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" />
            </div>
            <div class="form-group">
                <input type="submit" value="Login" />
            </div>
        </form>
    </div>
    <div class="row">
        <?php if (isset($status)) {
            echo $status;
        } ?>
    </div>
</div>
<?php include("../includes/footer.php") ?>