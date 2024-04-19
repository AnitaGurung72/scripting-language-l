<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $uploadDir = "uploads/";
    $allowedTypes = array("image/png", "image/jpeg", "image/gif");
    $maxFileSize = 2 * 1024 * 1024; 

    
    if (in_array($_FILES["file"]["type"], $allowedTypes)) {
       
        if ($_FILES["file"]["size"] <= $maxFileSize) {
           
            $fileName = uniqid() . "_" . $_FILES["file"]["name"];
            $filePath = $uploadDir . $fileName;

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {
                echo "File uploaded successfully: " . $fileName;
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "File size exceeds the limit (2 MB).";
        }
    } else {
        echo "Invalid file type. Allowed file types are PNG, JPG, and GIF.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/png, image/jpeg, image/gif" required>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
