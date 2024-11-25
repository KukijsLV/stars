<?php

$conn = new mysqli("localhost", "root","","stars");

//apskatiit lietotajus

$sql = "SELECT * FROM users";

$results = $conn->query("SELECT * FROM users");
$data = $results->fetch_assoc();

var_dump($data);

//ielikt datus

echo "<form>";

echo "<input name='username'";
echo "<input name='password' type= 'password' />";
echo "<input type='submit' value='saglabat' />";

echo "</form>";