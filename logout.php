<?php
session_start();
session_destroy();
header('location:http://localhost/public_html//index.html');
?>