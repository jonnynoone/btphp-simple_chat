<?php 

include 'database.php'; 

// Create Select Query
$query = "SELECT * FROM messages ORDER BY id ASC";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/style.css" rel="stylesheet">

    <title>Simple Chat</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Simple Chat</h1>
        </header>

        <div class="chatbox">
            <ul>
                <?php
                /*
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <li class=\"message\">
                            <span>" . $row['time'] . " </span>
                            - " . $row['user'] . ": " . $row['message'] . "
                        </li>
                        ";
                    }
                */
                ?>

                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <li class="message">
                            <span><?php echo $row['time'] ?></span>
                            - <strong><?php echo $row['user'] ?></strong>: <?php echo $row['message'] ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div> <!-- /.chatbox -->

        <div class="input">
            <?php if(isset($_GET['error'])) : ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
            <?php endif; ?>
            <form class="group" method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter Name">
                <input type="text" name="message" placeholder="Enter Message">
                <br>
                <input class="btn-submit" type="submit" name="submit" value="Submit">
            </form>
        </div> <!-- /.input -->
    </div> <!-- /.container -->
</body>

</html>