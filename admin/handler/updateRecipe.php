<?php

require_once '../../handler/DatabaseHandler.php';

session_start();


if (isset($_GET["recipeId"], $_SESSION["users"]) && $_SESSION["users"]["role"] == "1") {

    $db = new DatabaseHandler();

    $recipeId = $_GET["recipeId"];
    $isActive = $_GET["isActive"];

    $result = $db->executeQuery("UPDATE recipe SET isActive = $isActive WHERE recipeId = $recipeId");

    if ($result) {
        echo "<script>alert('Successfully updated recipe');</script>";
        header("Location: ../Recipe.php");
    } else {
        echo "<script>alert('Failed to update recipe');</script>";
        header("Location: ../Recipe.php");
    }
} else {
    header("Location: ../Recipe.php");
}
