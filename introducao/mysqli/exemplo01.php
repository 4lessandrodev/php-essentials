<?php 


$name = "Larissa";
$email = "larissa@mail.com";
$password = "128734SDDF2";


// endereço / usuário / senha / banco de dados 
$conn = new mysqli("localhost", "admin", "admin", "php_db");
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$query = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

//sss > string, string, string -> para cada interrogação 
$query->bind_param("sss", $name, $email, $password);

$query->execute();

?>