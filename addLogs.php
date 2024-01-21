<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/crudStyles.css">
    <title>Add Logs</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="./index.html" tabindex="0">Home</a></li>
            <li><a href="./Logs.php" tabindex="0">View Logs</a></li>
            <li><a href="#about" tabindex="0">About</a></li>
            <li><a href="#contact" tabindex="0">Contact</a></li>
        </ul>
    </nav>

    <main>
        <h2 class="log-title">Add Log</h2>
        <div class="date-div">
            <label for="date">Date:</label>
            <p id="date" class="date" name="date">
                <?php
                date_default_timezone_set('America/Los_Angeles');
                $currentDate = date("Y-m-d");
                $timestamp = strtotime($currentDate);
                echo date("l, F j, Y", $timestamp);
                ?>
            </p>
        </div>

        <form action="./php/create_log.php" method="post">

            <label for="location">Location:</label>

            <input type="text" id="location" name="location" required>

            <label for="application">App:</label>
            <input type="text" id="application" name="application" required>

            <label for="description">Description:</label>
            <textarea id="description" class="txt-area" name="description" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </main>

</body>

</html>