<?php

$connection = new mysqli ("localhost","root","","sipols");
echo "helo!!";
$result = $connection->query("SELECT * FROM users");
$data=$result ->fetch_assoc();
var_dump ($data);

?>