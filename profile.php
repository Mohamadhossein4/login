<?php session_start();
echo $_SESSION['name'] . " ";
echo $_SESSION['lastname'];
$c = $_SESSION['picture'];
echo " <img src='picture/$c' width='150px' height='150px'>" ;
