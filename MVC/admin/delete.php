<?php
session_start();
require('../app/app.php');
ensure_user_is_authenticated();

if (is_get()) {
    $key = sanitize($_GET['key']);
    $term = Data::get_term($key);

    if (empty($key) || $term === false) {
        view('not_found');
        die();
    }

    view('admin/delete', $term);
}

if (is_post()) {
    $term = sanitize($_POST['term']);

    if (empty($term) || empty($definition) || empty($original_term)) {
        // TODO: display msg
    } else {
        Data::delete_term($term);
        redirect('index.php');
    }
}
