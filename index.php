<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="zona-meniu">
        <nav>
            <ul>
                <li><a href="index.php">Acasa</a></li>
                <li><a href="#">Despre</a></li>
                <li><a href="#">Servicii</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <form action="cauta.php">
            <input type="text" name="cautare" placeholder="Cautare">
        </form>
        <aside class="login">
            <a href="login.php">Login</a>|<a href="inregistrare.php">Inregistrare</a>
        </aside>
    </div>
</body>
</html>