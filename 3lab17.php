<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form action="addlab17.php" method="post">
        <label for="name">Name:</label>
        <input type="Text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="message">Message:</label>
        <textarea name="message" id="message"  rows="6"></textarea><br><br>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>