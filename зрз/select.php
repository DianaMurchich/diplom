<?php
$conn = new PDO('mysql:host = 127.0.0.1, dbname = diana', 'diana', '123123');
try{
    $data = $conn->prepare("SELECT * FROM diana.product ORDER BY id ");
    $data->execute();
    
}
?>