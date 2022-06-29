<?php

/*
    File ini digunakan untuk menangani hapus resep
*/


session_start();

if (isset($_SESSION["users"], $_GET["id"])) {
    require_once("./DatabaseHandler.php");

    $db = new DatabaseHandler();

    $recipe = $db->executeQuery("SELECT * FROM recipe WHERE recipeId = " . $_GET["id"] . " AND authorId = " . $_SESSION["users"]["id"]);
    if ($recipe->num_rows == 0) {
        $_SESSION["error"] = "You are not authorized to delete this recipe";
        header("Location: ../Profile.php");
    } else {
        //delete recipe
        $query = $db->executeQuery("DELETE FROM recipe WHERE recipeId = " . $_GET["id"]);
        if ($query) {
            header("Location: ../Profile.php");
        } else {
            $_SESSION["error"] = "Failed to delete recipe";
            header("Location: ../Profile.php");
        }
    }
}
