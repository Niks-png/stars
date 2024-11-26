<?php

$connection = new mysqli ("localhost","root","","sipols");
echo "STRADA YIPYYY";
$result = $connection->query("SELECT * FROM users");
$data=$result ->fetch_assoc();
var_dump ($data);

echo"<pre>";
var_dump ($_SERVER);
echo"</pre>";


if($_SERVER ["REQUEST_METHOD"] == "POST"){
$username = $_POST["username"];
$password = $_POST["password"];
echo"<h1>sdadasdadfdadadadadadadadadadadadadadadadadadada</h1>";

$sql ="INSERT INTO users
        (username,pass)
        VALUES
        ('$username', '$password');
";
$connection->query($sql);
}

echo "<form method = 'POST'>";
        echo  "<label>username:<input name='username' placeholder='USERNaME' /></label><br>";
        echo "<label> pasword:<input type='password' name='password' placeholder='PAROLE'/></label><BR>";
        echo "<input type='submit' value='registreties' />";
echo"</form>";

// $auglis =["sarkans", "abols", 120];
// $auglisasocc = ["color"=>"sarkans", "type"=>"abols","wheight"=>120];
// print_r($auglisasocc);
