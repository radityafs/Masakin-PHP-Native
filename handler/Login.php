<?php

/*
    File ini digunakan untuk menangani login user / authentikasi
*/

require_once 'DatabaseHandler.php';

if (isset($_POST)) {
    $database = new DatabaseHandler();
    $users = $database->executeQuery("SELECT * FROM users WHERE email = '" . $_POST['email'] . "'");
    $users = $users->fetch_assoc();

    if (count($users) > 0) {
        if (password_verify($_POST['password'], $users['password'])) {
            session_start();
            $_SESSION['users'] = [
                'id' => $users['userId'],
                'name' => $users['name'],
                'email' => $users['email'],
                'photo' => $users['photo'],
                'role' => $users['role']
            ];

            if ($users['role'] == "1") {
                header("Location: ../admin/index.php");
            } else {
                header("Location: ../index.php");
            }
        } else {
            session_start();
            $_SESSION['errorMsg'] = 'Invalid email or password';

            header('Location: ../login.php');
        }
    } else {
    }
} else {
    header("Location: ../Login.php");
}
