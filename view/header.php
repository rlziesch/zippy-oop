<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <main>
        <header>
            <?php

                if (!isset($_SESSION['userid'])) {
                    if ($action !== 'register' && $action !== 'logout') { ?>
                        <p>Click <a href=".?action=register">here</a> to register.</p>
                 <?php   }

                } else if (isset($_SESSION['userid'])) {
                    if ($action !== 'register' && $action !== 'logout') {
                    $userid = $_SESSION['userid']; ?>
                    <p>Welcome, <?php echo $userid ?>! <a href=".?action=logout">(Logout)</a></p>
               <?php }
               } ?>


            <h1>Zippy Used Autos</h1>
        </header>