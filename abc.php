<?php 
session_start();
?>

<html>
    <body> <h1> welcome user = <?php 
    echo $_SESSION['user'];
    ?></h1></body>
</html>
