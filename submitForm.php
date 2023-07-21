<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Save the data to a CSV file
  $data = array($name, $email, $message);
  $fp = fopen('data.csv', 'a');
  fputcsv($fp, $data);
  fclose($fp);
  
  // Redirect the user to a thank-you page
  header('Location: thankyou.html');
  exit;
}
?>
