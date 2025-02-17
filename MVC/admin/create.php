<?php
require('../app/app.php');

echo is_post();

if (is_post()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);

    if (empty($term) || empty($definition)) {
        // TODO: display msg
    } else {
        add_term($term, $definition);
        redirect('index.php');
    }
}

view('admin/create');
