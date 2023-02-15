<?php
require_once('db.php');
require_once('function.php');
?>
<?php

//$_POST = json_decode(file_get_contents("php://input"), true);
// echo $_POST;

if (!empty($_POST['usernameValue'])) {
  echo "yes";
} else {
  echo "no";
}

echo $_POST['usernameValue'];
