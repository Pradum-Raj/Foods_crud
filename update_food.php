<?php
include_once 'db_config.php';
include '../footer.php';
if (isset($_POST['update'])) {
    $food_id = $_POST['food_id'];
    $food_name = $_POST['food_name'];
    $food_description = $_POST['food_description'];

    // Upload new image
    if ($_FILES["image"]["size"] > 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        // Update data with new image
        $update_query = "UPDATE foods SET food_name='$food_name', food_description='$food_description', image='$target_file' WHERE id=$food_id";
    } else {
        // Update data without changing the image
        $update_query = "UPDATE foods SET food_name='$food_name', food_description='$food_description' WHERE id=$food_id";
    }

    if ($conn->query($update_query) === TRUE) {
        $_SESSION['status']=" update completed Sucsesfully!";
        $_SESSION['status_delete']='success';
        header("Location: view_foods.php");
        exit();
    } else {
        die("Error: " . $conn->error);
        $_SESSION['status']=" not update";
        $_SESSION['statu_delete']='error';
    }
} else {
    die("Invalid request");

}
?>
