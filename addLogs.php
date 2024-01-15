<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/crudStyles.css">
    <title>Add Logs</title>
</head>
<body>
    <h2>Add Log</h2>
    <label for="date">Date:</label>
        <p id="date" name="date"> 
            <?php 
                $currentDate = date("Y-m-d");
                echo $currentDate;
            ?>
    </p><br>
    <form action="./php/create_log.php" method="post">
        
        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description" required><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br>

        <label for="application">App:</label><br>
        <input type="text" id="application" name="application" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
