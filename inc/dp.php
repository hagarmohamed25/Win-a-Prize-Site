<?php

$conn = mysqli_connect("localhost", "root", "root", "project");

if (!$conn) {
    echo 'Error: ' . mysqli_connect_error();
}