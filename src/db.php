<?php
var_dump($_ENV);
var_dump(getenv());
define('CONFIG_ENV', 'APP_CONFIG_PATH');
if (!getenv(CONFIG_ENV) && !$_SEVER[CONFIG_ENV] && !$_ENV[CONFIG_ENV]) 
    die("no config set, please set ".CONFIG_ENV." environment variable");
$config_path = isset($_SERVER[CONFIG_ENV]) ? $_SERVER['APP_CONFIG_PATH'] : (getenv(CONFIG_ENV)?getenv(CONFIG_ENV):$_ENV[CONFIG_ENV]);
$config=parse_ini_file($config_path);

mysqli_connect($config["host"],$config["user"],$config["password"]) || die("can't connect:".vvmysqli_connect_error());