<?php 


$name = "Larissa";
$email = "larissa@mail.com";
$password = "128734SDDF2";


// endereço / usuário / senha / banco de dados 
$conn = new mysqli("localhost", "admin", "admin", "php_db");
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM users ORDER BY created_at ASC");

$data = array();

while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}

echo json_encode($data);

?>