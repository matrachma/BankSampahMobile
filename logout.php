<?php
session_start(); // memulai session
session_destroy(); // menghapus session
echo "<meta http-equiv='refresh' content='0; url=index.html'>"; // mengambalikan ke form_login.php
?>