<?php

   $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'test'
   );

   if(isset($conn)) {
       //echo "<strong>The database is connected </strong>";
    } else {
        echo "<strong>Something was wrong</strong>";
    }

?>