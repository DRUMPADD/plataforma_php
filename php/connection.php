<?php
    try {
        $connect = mysqli_connect(
            $hostname = $_ENV["MYSQL_HOST"],
            $username = $_ENV["MYSQL_USER"],
            $password = $_ENV["MYSQL_PASSWORD"],
            $database = $_ENV["MYSQL_NAME"],
            $post = $_ENV["MYSQL_PORT"],
        );
    } catch (mysqli_error $e) {
        echo mysqli_error($connect);
    }
?>