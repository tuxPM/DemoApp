<?php

define('CONFIG_ENV', 'APP_CONFIG_PATH');
if (!getenv(CONFIG_ENV) && !isset($_SERVER[CONFIG_ENV]) && !isset($_ENV[CONFIG_ENV])) 
    die('no config set, please set '.CONFIG_ENV.' environment variable');
$config_path = isset($_SERVER[CONFIG_ENV]) ? $_SERVER[CONFIG_ENV] : (getenv(CONFIG_ENV)?getenv(CONFIG_ENV):$_ENV[CONFIG_ENV]);
$config=parse_ini_file($config_path);

$db=new mysqli($config["host"],$config["user"],$config["password"], $config['db']);
if ($db->connect_errno)
    die("can't connect:{$db->connect_error}");
echo "connected<br/>";

$sql="select * from deployment";
if ($result = $db->query($sql)) {
    while($obj = $result->fetch_object()){ 
        echo "- $obj->name @ $obj->date<br/>";
    }
} else {
    echo "query error:{$db->error}";
}
echo "ok";