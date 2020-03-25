<?php

    include("db.php");

    if($_POST['title'] && $_GET['id'] && $_POST['description'] ) {

        $title = $_POST['title'];
        $desc = $_POST['description'];
        $id = $_GET['id'];

        $query = "UPDATE  `test`.`todo` SET  `title`='$title',`description`='$desc' WHERE  `todo`.`id`=$id LIMIT 1";

        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Something was wrong ". mysqli_error($conn));
        }

        header("Location: index.php");
    }

?>

<?php  include("./includes/update.php") ?>
