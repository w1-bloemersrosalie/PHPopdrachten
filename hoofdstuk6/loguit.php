<?php /**
 * User: Rosalie Bloemers
 * Date: 16-3-2020
 */ ?>
<?php include '../header.php'; ?>
<?php

session_start();
session_destroy();

header('location: opdracht61.php');

?>
<?php include '../footer.php'; ?>