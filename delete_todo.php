<?php

    include("db.php");

    if ($_GET['id']) {
        $id = $_GET['id'];
        
        $query = "DELETE FROM todo WHERE todo.id=$id LIMIT 1";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Something was wrong");
        }

        header("location: index.php");
    }

?>