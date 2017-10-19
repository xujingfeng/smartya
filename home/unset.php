<?php 
  session_start();
  unset($_SESSION['user']);
  session_destroy();
  echo "<script>window.history.back();</script>";
?>