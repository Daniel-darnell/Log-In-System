<?php 
    //Connecting my login_system database to the application using the config file
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'Daniel@1997');
    define('DB_NAME', 'login_system');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link == false){
        die("ERROR:Could not connect. " . mysqli_connect_error());
    }
?>

