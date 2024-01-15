<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crudStyles.css">
    <title>Create Logs</title>
</head>
<body>

<?php
require './env/superDB.php';
// We get our post data from the HTML
$description = $_POST['description']; // Assume this comes from a form
$location = $_POST['location']; // Assume this comes from a form
$date = date("Y-m-d");
$id = $randomNumber = rand(100, 1000);
$application = $_POST['application'];

// Validate and sanitize inputs
$description = filter_var($description, FILTER_SANITIZE_STRING);
$location = filter_var($location, FILTER_SANITIZE_STRING);
$application = filter_var($application, FILTER_SANITIZE_STRING);

// Run SQL code and if successful let us know!
$sql = "INSERT INTO dashboard.logs (id,description, date, application,location) VALUES (?,?,?,?,?)";
$stmt= $pdo->prepare($sql);
if($stmt->execute([$id, $description, $date,$application,$location])){

    echo "<div class='success-message'>Record created successfully.</div>";
} 
else {
    echo "<div class='error-message'>Error: " . htmlspecialchars($stmt->errorInfo()[2]) . "</div>"; // Displaying the error message from PDO
}
?>

</body>
</html>
