<?php

/*
    File ini digunakan untuk mengangani penambahan resep 
    dan perubahan data pada resep
*/

require_once 'DatabaseHandler.php';

if (isset($_POST)) {
    $db = new DatabaseHandler();

    session_start();

    $newRecipe = [];

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
            $newRecipe["photo"] = $timestamp . "-" . basename($value["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if (isset($_GET["id"])) {
        $id = intval($_GET["id"]);

        $query = $db->executeQuery("UPDATE recipe SET title = '" . $_POST["title"] . "', ingredients = '" . $_POST["ingredients"] . "', photo = '" . $newRecipe["photo"] . "' WHERE recipeId = $id");

        if ($query) {
            header("Location: ../Profile.php");
        } else {
            $_SESSION["error"] = "Failed to update recipe";
            header("Location: ../Profile.php");
        }
    } else {
        $query = $db->executeQuery("INSERT INTO recipe(authorId,title,ingredients,photo) VALUES ('" . $_SESSION["users"]["id"] . "', '" . $_POST["title"] . "', '" . $_POST["ingredients"] . "', '" . $newRecipe["photo"] . "')");
        if ($query) {
            header("Location: ../Profile.php");
        } else {
            session_start();
            $_SESSION["error"] = "Error while adding recipe";
            header("Location: ../Add.php");
        }
    }
} else {
    header("Location: ../Login.php");
}
