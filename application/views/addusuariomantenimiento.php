<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Usuario Adicionado</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/estilo.css"/>
</head>
<h1 style="color: red">Usuario fue agregado</h1>
<br/>
<?php echo form_open('adicionar'); ?>
    <button type="submit" name="submitForm" value="AddUsuario">Seguir Adicionando Usuarios</button>
    <button type="submit" name="submitForm" value="Login">Regresar Login</button>
</form>

</body>
</html>