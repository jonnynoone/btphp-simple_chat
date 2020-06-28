<?php
// Connect to MySQL
$con = mysqli_connect("localhost", "root", "", "simple_chat");

// Test connection
if (mysqli_connect_errno()) {
    die('<br>Failed to connect to MySQL: ' . mysqli_connect_error());
}