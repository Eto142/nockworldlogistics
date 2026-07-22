<?php
define('_server_', 'localhost');
define('_username_', 'root');
define("_password_", "");
define('_dbName_', 'nockworldlogistics');
define('SITE_TITLE', 'NockworldLogistics');
define('SITE_URL', 'http://localhost/');
//define('FAV_ICON', '../favicon.ico');
// Connect to database
$conn = new mysqli(_server_, _username_, _password_, _dbName_);

?>