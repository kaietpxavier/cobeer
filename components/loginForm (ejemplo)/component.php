<?php include __DIR__.'/controller.php'; ?>
<style> <?php include __DIR__.'/template.css'; ?> </style>

<form name="loginForm" method="post">
        <input type="text" name="correo">
        <input type="password" name="pass">
        <input type="hidden" name="send" value="1">
        <input type="submit" value="LOGIN" id="boto">         
</form>