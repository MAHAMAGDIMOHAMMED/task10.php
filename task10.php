<?php
include ('./dbconnection.php');

$name = "Mahomoud";
$info = "Third year of secondary school";
$email = "Mahmoud@yahoo.com";
$pw = "mah12moud";

echo "<br>";
echo $name;

$query = "INSERT INTO students(Name,Info,Email,Password)
VALUES ('$name','$info', '$email','$pw')";


$conn->exec($query);

echo "<br> Date Inserted Successfully";

?>