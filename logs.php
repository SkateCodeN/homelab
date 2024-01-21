<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/logStyles.css">
    <title>Logs</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="./index.html" tabindex="0">Home</a></li>
            <li><a href="#about" tabindex="0">About</a></li>
            <li><a href="./addLogs.php" tabindex="0">Add Log</a></li>
            <li><a href="#contact" tabindex="0">Contact</a></li>
        </ul>
    </nav>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Event</th>
                <th>Location</th>
                <th>App</th>
            </tr>
            <?php
            require './php/env/database.php';

            $sql = "SELECT * FROM dashboard.logs";
            $stmt = $pdo->query($sql);

            while ($row = $stmt->fetch()) {
                echo
                    "<tr><td>" . $row['id'] . "</td>" .
                    "<td>" . date("m/d/Y", strtotime($row['date'])) . "</td>" .
                    "<td>" . htmlspecialchars($row['description']) . "</td>" .
                    "<td>" . $row['location'] . "</td>" .
                    "<td>" . $row['application'] . "</td></tr>";
            }
            ?>
        </table>
    </main>

</body>

</html>