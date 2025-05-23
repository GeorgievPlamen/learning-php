<?php
session_start();

require('app/app.php');

if (is_user_authenticated()) {
    redirect('admin/');
}

if (is_post()) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = sanitize($_POST['password']);

    // compare with data store
    if (authenticate_user($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin/');
    } else {
        $view_bag['status'] = "The provided credentials didn't work";
    }

    if ($email == false) {
        $view_bag['status'] = "Please eneter a valid email";
    }
}

view('login', $items);
