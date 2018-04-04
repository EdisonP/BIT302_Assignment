<?php
 session_start();
  session_destroy();
  echo ("<script>alert('Logged out successfully!')</script>");
  header("Location: ../login.html");
?>