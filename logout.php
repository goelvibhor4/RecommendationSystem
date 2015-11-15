<?php
session_start();
session_unset();
session_destroy();


header("Location:/movies/home.html");
exit;
?>