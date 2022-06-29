<?php

/*
    File ini digunakan untuk menangani registrasi user / pendaftaran
*/


require_once 'DatabaseHandler.php';

if (isset($_POST)) {
    $database = new DatabaseHandler();

    $newUsers = [];
    foreach ($_POST as $key => $value) {

        if ($key == "password") {
            $value = password_hash($value, PASSWORD_BCRYPT);
        }

        $newUsers[$key] = $value;
    }

    foreach ($_FILES as $key => $value) {

        $target_dir = "../public/";
        $timestamp = time();

        $target_file = $target_dir . $timestamp . "-" . basename($value["name"]);

        $uploadOk = 1;

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }


        if ($value["size"] > 1024 * 1024 * 2) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        }

        if (move_uploaded_file($value["tmp_name"], $target_file)) {
            $newUsers["photo"] = $timestamp . "-" . basename($value["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $query = $database->executeQuery("INSERT INTO users(email,password,name,photo,token) VALUES ('" . $newUsers["email"] . "', '" . $newUsers["password"] . "', '" . $newUsers["name"] . "', '" . $newUsers["photo"] . "', '" . uniqid() . "')");
    if ($query) {

        $resId = $database->executeQuery('SELECT LAST_INSERT_ID()');
        $resId = mysqli_fetch_assoc($resId);

        session_start();
        $_SESSION["users"] = [
            'id' => $resId["LAST_INSERT_ID()"],
            'name' => $newUsers["name"],
            'email' => $newUsers["password"],
            'photo' => $newUsers["photo"]
        ];


        header("Location: ../index.php");
    } else {
        session_start();
        $_SESSION["errormsg"] = "Something went wrong, please try again.";

        header("../Register.php");
    }
} else {
    header("Location: ../Login.php");
}
