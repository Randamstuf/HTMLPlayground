<?php
// define variables and set to empty values
$input = $auth = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input = test_input($_POST["input"]);
  $auth = test_input($_POST["auth"]);
} else {
echo "408";
die();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($auth == "000") {

} else {
  echo "401";
?>
