<?php
require('../app/app.php');

echo is_post();

if (is_get()) {
    $key = sanitize($_GET['key']);
    $term = get_term($key);

    if (empty($key) || $term === false) {
        view('not_found');
        die();
    }

    view('admin/edit', $term);
}

if (is_post()) {

    echo 'Hello';

    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $original_term = sanitize($_POST['original-term']);

    if (empty($term) || empty($definition) || empty($original_term)) {
        // TODO: display msg
    } else {
        update_term($original_term, $term, $definition);
        redirect('index.php');
    }
}
