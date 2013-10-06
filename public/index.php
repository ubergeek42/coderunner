<?php
// Autoload our dependencies with Composer
require "../vendor/autoload.php";

ORM::configure('sqlite:./example.db');

/* For MySQL
ORM::configure('mysql:host=localhost;dbname=my_database');
ORM::configure('username', 'database_user');
ORM::configure('password', 'top_secret');
*/
?>
<!doctype html>
<html>
<head>
</head>
<body>
</body>
</html>
