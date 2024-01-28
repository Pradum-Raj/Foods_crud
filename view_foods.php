<?php
include_once 'db_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>View Foods</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">View Foods</h2>

    <!-- Table for displaying data -->
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Food Name</th>
            <th>Food Description</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Fetch and display data
        $select_query = "SELECT * FROM foods";
        $result = $conn->query($select_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . $row['id'] . '</td>
                        <td>' . $row['food_name'] . '</td>
                        <td>' . $row['food_description'] . '</td>
                        <td><img src="' . $row['image'] . '" alt="Food Image" style="max-width: 100px;"></td>
                        <td>
                            <a href="edit_food.php?id=' . $row['id'] . '" class="btn btn-warning btn-mt 5">Edit</a>
                            <a href="delete_food.php?id=' . $row['id'] . '" class="btn btn-danger btn-mt 5">Delete</a>
                        </td>
                      </tr>';
            }
        } else {
            echo '<tr><td colspan="5">No data available</td></tr>';
        }
        ?>
        </tbody>
    </table>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

</body>
</html>
