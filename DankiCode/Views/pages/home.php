<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo, <?php echo $_SESSION['nome'] ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d709ea726d.js" crossorigin="anonymous"></script>
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">

</head>
<body>  

    <section class="main-feed">
        <div class="sidebar">
            <div class="logo-sidebar">
                <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg" alt="logo">
            </div>
            <div class="menu-sidebar">
                <br>
                <h4>Menu</h4>
                <br>
                <a href="#"><i class="fa-regular fa-newspaper"></i>  Feed</a>
                <a href="#"><i class="fa-regular fa-user"></i>  Perfil</a>
                <a href="#"><i class="fa-solid fa-users"></i>  Amigos</a>
                <a href="?loggout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div><!-- sidebar -->
        <div class="feed">
            <div class="feed-single-post">
                <div class="feed-single-post-author">
                    <div class="img-single-post-author">
                        <!-- todo:colocar imagem placeholder -->
                        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/leandro.jpg" alt="icon-user">
                    </div> 
                    <div class="feed-single-post-author-info">
                        <h3>Leandro Katarino</h3>
                        <p>08:15 20/09/2022</p>
                    </div>
                </div> <!-- img-single-post-author -->
                <div class="feed-single-post-content">
                    <p>(MENSAGEM CRINGE RS)Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet assumenda deserunt eum consequatur cum officiis vitae provident minima, voluptatibus suscipit sequi quod atque! Illum quo ad quas, est dolorem sit!</p>
                </div> <!-- feed-single-post-content --> 
            </div><!-- feed-single-post -->
            <div class="friends-request-feed">
                <h4>Solicitações de Amizades</h4>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/leandro.jpg" alt="icon-person">
                    <div class="friend-request-single-info">
                        <h3>Leandro Katarino</h3>
                        <p><a href="#">Aceitar</a> | <a href="#">Recusar</a></p>
                    </div>
                </div>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/leandro.jpg" alt="icon-person">
                    <div class="friend-request-single-info">
                        <h3>Leandro Katarino</h3>
                        <p><a href="#">Aceitar</a> | <a href="#">Recusar</a></p>
                    </div>
                </div>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/leandro.jpg" alt="icon-person">
                    <div class="friend-request-single-info">
                        <h3>Leandro Katarino</h3>
                        <p><a href="#">Aceitar</a> | <a href="#">Recusar</a></p>
                    </div>
                </div>
            </div>
        </div><!-- feed -->
    </section>



</body>
</html>