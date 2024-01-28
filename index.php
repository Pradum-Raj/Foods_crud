<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Food Management</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Food Management</h2>

    <!-- Form for inserting data -->
    <form method="post" action="process.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="food_name">Food Name:</label>
            <input type="text" class="form-control" name="food_name" required>
        </div>
        <div class="form-group">
            <label for="food_description">Food Description:</label>
            <textarea class="form-control" name="food_description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Select Image:</label>
            <input type="file" class="form-control-file" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Add Food</button>
    </form>
</div>



</body>
</html>
