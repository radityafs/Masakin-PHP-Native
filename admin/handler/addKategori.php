<?php
require_once '../../handler/DatabaseHandler.php';

session_start();

if (isset($_POST["category"], $_SESSION["users"]) && $_SESSION["users"]["role"] == "1") {

    $db = new DatabaseHandler();

    $category = $_POST["category"];

    if (isset($_POST["id"]) && $_POST["id"] != "") {
        $id = $_POST["id"];
        $result = $db->executeQuery("UPDATE category SET name = '$category' WHERE idCategory = $id");

        if ($result) {
            header("Location: ../Category.php");
            echo "<script>alert('Successfully updated category');</script>";
        } else {
            header("Location: ../Category.php");
            echo "<script>alert('Failed to update category');</script>";
        }
    } else {
        $result = $db->executeQuery("INSERT INTO category (name) VALUES ('$category')");

        if ($result) {
            header("Location: ../Category.php");
            echo "<script>alert('Successfully added category');</script>";
        } else {
            header("Location: ../Category.php");
            echo "<script>alert('Failed to add category');</script>";
        }
    }
} else {
    header("Location: ./admin/Category.php");
}
