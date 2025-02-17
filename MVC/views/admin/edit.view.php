<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"><?= $view_bag['heading'] ?></h1>
        </div>
    </div>
    <div class="row">
        <a href="create.php">Edit Term</a>
    </div>

    <div class="row">
        <form action="" method="POST">
            <input type="hidden" name="original-term" value="<?= $model->term ?>">
            <div class="form-group">
                <label for="term">Term:</label>
                <input type="text" name="term" id="term" value="<?= $model->term ?>">
            </div>
            <div class="form-group">
                <label for="definition">Definition:</label>
                <textarea name="definition" id="definition"><?= $model->definition ?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Edit">
            </div>
        </form>
    </div>
</div>