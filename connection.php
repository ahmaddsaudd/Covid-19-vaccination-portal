<?php

$conn = mysqli_connect('localhost', 'root');

if(!$conn){
    ?>
    <script lang="javascript">
        alert('Error: Unable to connect to database');
    </script>
    <?php   
}

mysqli_select_db($conn, 'appointment_requests');

?>