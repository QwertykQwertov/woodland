<?php

$json = file_get_contents('php://input');

echo $json;
// if ($_SERVER["REQUEST_METHOD"]) {
//   echo 'post';
// } else {
//   echo 'get';
// }
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   echo 'work';
//   if (isset($_POST['name'])) {
//     echo "Полученное имя: " . htmlspecialchars($_POST['name']);
//   }
// }
// echo 'work';
// echo file_get_contents("php://input");
// echo '------23-------------------';
// var_dump($_POST);
header('Content-Type: application/json');

// Получаем JSON данные
$json = file_get_contents('php://input');
$data = json_decode($json, true);

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // echo 'work';
  // if (isset($data['name'])) {
  //   $response['status'] = 'success';
  //   $response['name'] = htmlspecialchars($data['name']);
  // } else {
  //   $response['status'] = 'error';
  //   $response['message'] = 'Name field is missing';
  // }

  // echo json_encode($response);
}
