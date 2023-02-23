<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Username is set as: " . $_SESSION['username'];
} else {
    echo "Username is not set";
}
?>
