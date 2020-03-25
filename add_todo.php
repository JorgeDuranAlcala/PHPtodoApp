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

        $_SESSION['message'] = "Todo Added Successfully";
        $_SESSION['message_type'] = "success";

    header("Location: index.php");
    }

    
?>