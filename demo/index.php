<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Demo</title>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = true;

    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }
    ?>
    <h1>
        <?= $message; ?>
    </h1>

</body>
<script src="fiveserver.config.js"></script>

</html>