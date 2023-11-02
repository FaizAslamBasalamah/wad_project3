<?php
$conn = mysqli_connect("localhost:3308","root","","wad_project3");

$result = mysqli_query($conn,"select * FROM student");

var_dump(mysqli_fetch_object($result));
?>