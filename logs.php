<html>
    <head>
        <title>Add Log</title>
    </head>
    <body>
        <header>
            <a href="./addLogs.php"> Add Log</a>
        </header>
    </body>
</html>

<?php
require './php/env/database.php';

$sql = "SELECT * FROM dashboard.logs";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch()) {
    // Process each row
    echo "Date: " . date("m/d/Y", strtotime($row['date'])) . 
    
    " Event: " . $row['description'] . "<br>";
}
?>