<?php
function connect()
{
    $dbHost = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "inventory_project";

    $conn = new mysqli($dbHost, $user, $pass, $dbName);
    return $conn;
}

function closeConnection($cn)
{
    $cn->close();

}



?>