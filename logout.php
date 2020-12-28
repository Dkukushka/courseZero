<?php
setcookie("user", '', time() - 60 * 60 * 24 * 30, "/", NULL);
header('Location:index.php');
