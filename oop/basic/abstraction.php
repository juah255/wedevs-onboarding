<?php

interface IDatabase {
    public function connect(string $userName, string $password);
}

class MySql implements IDatabase{
    public function connect(
        string $userName, 
        string $password
        ) {
        echo "connecting mysql";
    }
}

$db = new MySql();
$db->connect("user", "pass");

?>