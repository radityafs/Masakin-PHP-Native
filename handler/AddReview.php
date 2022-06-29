<?php

/*
    File ini digunakan untuk mengangani penambahan komentar / riview pada resep
*/

require_once 'DatabaseHandler.php';
session_start();

if (isset($_POST, $_SESSION['users'], $_GET["id"])) {

    $db = new DatabaseHandler();

    $id = intval($_GET["id"]);

    $recipe = $db->executeQuery("SELECT * FROM recipe WHERE recipeId = $id");

    $recipe = $recipe->fetch_assoc();


    if ($recipe == null) {
        header("Location: ../Detail.php?=id" . $id . "");
    } else {



        $query = $db->executeQuery("INSERT INTO reviews (userId, recipeId, review) VALUES (" . $_SESSION['users']['id'] . ", $id, '" . $_POST['comment'] . "')");


        if ($query) {
            header("Location: ../Detail.php?id=" . $id . "");
        } else {
            echo "<script>alert('Review Failed added')</script>";
            header("Location: ../Detail.php?id=" . $id . "");
        }
    }
} else {
    $id = intval($_GET["id"]);
    var_dump($id);
    exit();

    header("Location: ../Detail.php?id=" . $id . "");
}
