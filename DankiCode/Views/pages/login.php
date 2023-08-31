<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login na Rede Social</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/style.css" rel="stylesheet">

</head>
<body>  

    <div class="sidebar"></div>
    <!--  -->
    <div class="form-container-login">
        <div class="logo-chamada-login">
            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg" alt="logo">
            <p>Conecte-se com seus amigos e expanda seus aprendizados com a rede social do Pout.</p>
        </div><!-- logo-chamada-login -->

        <div class="form-login">
                <form method="post">
                    <input type="text" name="email" placeholder="Login...">
                    <input type="password" name="senha" placeholder="Senha...">
                    <input type="submit" name="acao" value="Logar!">
                    <input type="hidden" name="login">
                </form>
                <p><a href="<?php echo INCLUDE_PATH ?>registrar">Criar Conta</a></p>
        </div><!-- form-login -->

    </div>
    
</body>
</html>