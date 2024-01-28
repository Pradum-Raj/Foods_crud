<?php
include_once 'db_config.php';
include '../footer.php';
if (isset($_POST['submit'])) {
    $food_name = $_POST['food_name'];
    $food_description = $_POST['food_description'];

    // Upload image
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Insert data into database
    $insert_query = "INSERT INTO foods (food_name, food_description, image) VALUES ('$food_name', '$food_description', '$target_file')";

    if ($conn->query($insert_query) === TRUE) {
       // echo '<script>alert("Processing completed!");</script>';
       $_SESSION['status']=" Processing completed Sucsesfully!";
       $_SESSION['status_process']='success';
      
        header('Location:view_foods.php');
       
    } else {
       // showAlert("Error: " . $conn->error, 'danger');
       $_SESSION['status']="  not Processing completed Sucsesfully!";
       $_SESSION['status_process']='error';
       
    }
}

// Function to display alerts
function showAlert($message, $type = 'secondary')
{
    echo '<div class="container mt-3">
            <div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
                ' . $message . '
                
            </div>
          </div>';
}

$conn->close();
?>
