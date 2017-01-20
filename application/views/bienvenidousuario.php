<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/nusuario.css"/>
</head>
<body>
<h1 style="color: blue">Bienvenido Usuario</h1>
<br/>
<h2>Usuario</h2>

<?php echo form_open('adicionar'); ?>
<button type="submit" name="submitForm" value="Login">Regresar Login</button>
</form>

</body>
</html>