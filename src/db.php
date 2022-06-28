<?php
var_dump($_ENV);
var_dump(getenv());
if (!getenv("CONFIG_PATH")) 
    die("no config set, please set CONFIG_PATH environment variable");
$config=parse_ini_file(getenv("CONFIG_PATH"));

mysqli_connect($config["host"],$config["user"],$config["password"]) || die("can't connect:".mysqli_connect_error());