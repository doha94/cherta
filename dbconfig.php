<?
    function dbconn(){
    $host = "localhost";
    $user = "cherta42";
    $pw = "jjw3125227!";
    $dbName = "cherta42";
    return new mysqli($host, $user, $pw, $dbName);
    }
?>