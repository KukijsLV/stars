<?php

$conn = new mysqli("localhost", "root","","stars");

//apskatiit lietotajus

$sql = "SELECT * FROM users";

$results = $conn->query("SELECT * FROM users");
$data = $results->fetch_assoc();

var_dump($data);
echo "</br>";


//izveido lai saglaba database php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users (username, pasword)
         VALUES ('$username', '$password');";

         $conn->query($sql);
}

//ielikt datus


echo "<form method='POST'>";

echo "<label>Lietotajvārds: <input name='username' /></label>"; 
echo "</br>";
echo "<label>Parole: <input name='password' type='password' /></label>";
echo "</br>";
echo "<input type='submit' value='saglabat' />";

echo "</form>";


//$accoc_masivs = ["vecums" => 6, "videjais_atzime" => 8, "ids" => 10];


