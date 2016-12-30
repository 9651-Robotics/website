<?php
  require("common.php");
  unset($_SESSION['user']);
  header("Location: members.php");
  die("Location: members.php");
