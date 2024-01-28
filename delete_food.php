<?php
include_once 'db_config.php';
include '../footer.php';
if (isset($_GET ['id'])) {
    $food_id = $_GET['id'];

    // Delete food
    $delete_query = "DELETE FROM foods WHERE id=$food_id";

    if ($conn->query($delete_query) === TRUE) {
        $_SESSION['status']=" delete completed Sucsesfully!";
        $_SESSION['status_delete']='success';
        header("Location: view_foods.php");
        exit();
    } 
    else {
        die("Error: " . $conn->error);
    }
}
else {
   // die("Invalid request");
    $_SESSION['status']=" data not delete  ";
    $_SESSION['statu_delete']='success';
}
?>
