<?php

    include("db.php");

    if ($_POST['title'] && $_POST['description']) {
        $title = $_POST['title'];
        $description = $_POST['description'];  

        $query = " INSERT INTO todo(title, description) VALUES ('$title', '$description') ";

        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Query failed");
        }

    header("Location: index.php");
    }

    
?>