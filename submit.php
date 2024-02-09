<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userText = $_POST['userText'];
  $userChoice = $_POST['userChoice'];

  echo "typed texts: " . $userText . "<br>";
  echo "radio options: " . $userChoice;
}
?>