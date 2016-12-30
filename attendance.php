<?php
  require("common.php");
  if(!(isset($_POST['attendance_code']))) {
    die("You forgot to enter a code!");
    header("Location: members.php");
  }
  //string redeclarations (doesn't work without these)
  $timestamp = getdate();
  $date = (string) $timestamp['year'] .  "-" . (string) $timestamp['mon'] . "-" . (string) $timestamp['mday'];

  $_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  $email = $_SESSION['user']['email'];
  $attendance_code = $_POST['attendance_code'];
  // gets the correct code
  $query = "SELECT * FROM attendance WHERE email='code@robotics.ucc.on.ca';";

  try
  {
    $stmt = $db->prepare($query);
    $stmt->execute();
  }

  catch(PDOException $ex)
  {
    die("Failed to run query: " . $ex->getMessage());
  }

  $code_info = $stmt->fetch();
  $today_code = $code_info['date'];

  //checks if code is correct
  if($today_code != $attendance_code) {
    die("You entered the wrong code!");
    header("Location: members.php");
  }

  //inserts attendance record
  $query = "
  INSERT INTO attendance (
    email,
    date
  ) VALUES (
    '$email',
    '$date'
  );";

  try {
    $stmt = $db->prepare($query);
    $stmt->execute();
    $_SESSION['checkedIn'] = $date;
    header("Location: members.php");
  }

  catch(PDOException $ex)
  {
    die("Failed to run query: " . $ex->getMessage());
    header("Location: members.php");
  }
