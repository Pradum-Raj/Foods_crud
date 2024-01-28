<?php
include_once 'db_config.php';
include '../footer.php';
if (isset($_GET['id'])) {
    $food_id = $_GET['id'];

    // Fetch food data
    $select_query = "SELECT * FROM foods WHERE id=$food_id";
    $result = $conn->query($select_query);

    if ($result->num_rows > 0) {
        $food = $result->fetch_assoc();
    } else {
        die("Food not found");
    }
} else {
    die("Invalid request");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Edit Food</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Edit Food</h2>

    <!-- Form for updating data -->
    <form method="post" action="update_food.php" enctype="multipart/form-data">
        <input type="hidden" name="food_id" value="<?php echo $food['id']; ?>">
        <div class="form-group">
            <label for="food_name">Food Name:</label>
            <input type="text" class="form-control" name="food_name" value="<?php echo $food['food_name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="food_description">Food Description:</label>
            <textarea class="form-control" name="food_description" rows="3" required><?php echo $food['food_description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Select New Image:</label>
            <input type="file" class="form-control-file" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update Food</button>
    </form>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

</body>
</html>
