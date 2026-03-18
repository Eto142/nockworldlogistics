<?php
define('_server_', 'localhost');
define('_username_', 'nockworl_logistics');
define("_password_", "LZgPIF@xPafcPtz0");
define('_dbName_', 'nockworl_logistics');
define('SITE_TITLE', 'NockworldLogistics');
define('SITE_URL', 'https://nockworldlogistics.com/');
//define('FAV_ICON', '../favicon.ico');
// Connect to database
$conn = new mysqli(_server_, _username_, _password_, _dbName_);

?>