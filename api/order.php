<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$settings = require_once $_SERVER['DOCUMENT_ROOT'] . '/api/settings.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail(array $mail_settings)
{
  $mail = new PHPMailer(true);
  try {
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = $mail_settings['host'];                     //Set the SMTP server to send through
    $mail->SMTPAuth = $mail_settings['auth'];                                   //Enable SMTP authentication
    $mail->Username = $mail_settings['username'];                     //SMTP username
    $mail->Password = $mail_settings['password'];                               //SMTP password
    $mail->SMTPSecure = $mail_settings['secure'];            //Enable implicit TLS encryption
    $mail->Port = $mail_settings['port'];
    $mail->CharSet = $mail_settings['charset'];

    $mail->setFrom($mail_settings['from_email'], $mail_settings['from_name']);

    $mail->addAddress('qwertykqwertov@mail.ru');
    $mail->isHTML($mail_settings['is_html']);
    $mail->Subject = 'Заказ';
    $mail->Body = '<h1> Заголовок в письме <h1> <p> И содержание заказа</p>';

    return $mail->send();
  } catch (Exception $e) {
    return false;
  }
}

sendMail($settings['mail_settings_prod']);

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
