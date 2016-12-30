<?php
require("common.php");
  if(empty($_POST['new_code'])) {
    die("You forgot to enter a code!");
    header("Location: members.php");
  }
  $_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
  $new_code = $_POST['new_code'];
  $query = "
  REPLACE INTO attendance (
    email,
    date,
    id
  ) VALUES (
    'code@robotics.ucc.on.ca',
    '$new_code',
    1
  );";
  try {
    $stmt = $db->prepare($query);
    $stmt->execute();
    header("Location: members.php");
  }

  catch(PDOException $ex)
  {
    die("Failed to run query: " . $ex->getMessage());
    header("Location: members.php");
  }
