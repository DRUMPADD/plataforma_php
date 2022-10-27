<?php
    try {
        $connect = mysqli_connect(
            "162.241.62.45",
            "fluidos4_hazardousback",
            "0uFM&UV-G13+",
            "fluidos4_sigssmac",
        );
    } catch (mysqli_error $e) {
        echo mysqli_error($connect);
    }
?>