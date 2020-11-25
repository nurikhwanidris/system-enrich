<?php

$data_wildcardsearch = $_POST['term'];
$query = "SELECT * FROM airlines WHERE airline = '$data_wildcardsearch'";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'enrich-new'), $query);

while ($row = mysqli_fetch_arraY($result)) {
    echo $row['airline'];
}
