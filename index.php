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
                <li class="message"><span>10:15 </span> - Jonny: Hey, what are you guys up to?</li>
                <li class="message"><span>10:15 </span> - Jonny: Hey, what are you guys up to?</li>
                <li class="message"><span>10:15 </span> - Jonny: Hey, what are you guys up to?</li>
                <li class="message"><span>10:15 </span> - Jonny: Hey, what are you guys up to?</li>
                <li class="message"><span>10:15 </span> - Jonny: Hey, what are you guys up to?</li>
            </ul>
        </div> <!-- /.chatbox -->

        <div class="input">
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