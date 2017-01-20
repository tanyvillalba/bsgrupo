<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/estilo.css"/>
</head>
<body>
<h1 style="color: red">Bienvenido Administrador</h1>
<br/>
<h2>Crear usuario nuevo (nivel usuario)</h2>

<?php echo form_open('addusuario'); ?>
<label for="email">Email:</label>
<input type="text" size="24" id="email" name="email"/>
<br/>
<label for="password">Password:</label>
<input type="password" size="20'" id="password" name="password"/>
<br/>
<button type="submit" name="submitForm" value="AddUsuario">Adicionar Usuario</button>
<button type="submit" name="submitForm" value="Login">Regresar Login</button>

</form>

</body>
</html>