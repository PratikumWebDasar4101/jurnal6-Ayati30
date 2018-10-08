<?php
session_start();
$user = array("nama" => "ayati",
              "username" => "admin",
              "password" => 1234);

is($_POST["username"] == $username["username"] && $_POST["password"] == $password["password"])
{
  $_session ["username" = $_POST[ "username"];
  $_SESSION["password"] = $_POST["password"];

header("Location: from.php");
}
else
{
echo "salah masuk";
}
?>
