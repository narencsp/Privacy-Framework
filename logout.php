<?php
session_start();
error_reporting(0);
unset($_SESSION['username']);
unset($_SESSION['password']);?>
<script type="text/javascript">
window.location.href = 'https://mycdn.000webhostapp.com/login.php';
</script>