<?php 

if(!empty($_POST['first']) || !empty($_POST['last']) || !empty($_POST['e-mail']) || !empty($_POST['phone'])){
$first_name = $_POST['first'];
$last_name= $_POST['last'];
$e_mail = $_POST['e-mail'];
$phone = $_POST['phone'];
$message = $_POST['massange'];
// var_dump($_POST);
require_once("./app/connect.php");

try{
    $query = $conn->prepare("INSERT INTO `diana`.`making_orders`(`id`, `first name`, `last name`, `e-mail`,`phone`,`message`) VALUES (null, :first, :last, :email, :phone, :message)");
    
    $data = ['first' => $first_name, 'last' => $last_name,  'email' => $e_mail, 'phone' => $phone, 'message' => $message]; 
    // var_dump($data);
    
    $query->execute($data);

    echo $conn->lastInsertId();
    // $_SESSION(изучить и вывести сообщение)
    // Форматированный вывод на экран
    // echo "<pre>";

    // Вывод ответа в виде массива данных
    // $return_id = $conn->lastInsertId();
    // var_dump($return_id);
    // $result = true;
}catch (Exception $e) {
    echo $e;
};
}else{
    header("Location: contact_us.php");
}
?>