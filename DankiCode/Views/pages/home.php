<!DOCTYPE html>
<html>
<head>
	<!--ALTERAR TITULO-->
	<title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/d709ea726d.js" crossorigin="anonymous"></script>
	<link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">


</head>

<body>

	<section class="main-feed">
		<?php 
			include('includes/sidebar.php'); 
		?>
		<div class="feed">
			<div class="feed-wraper">
			<div class="feed-form">
				<form method="post">
					<textarea required="" name="post_content" placeholder="No que voce está pensando?"></textarea>
					<input type="hidden" name="post_feed">
					<input type="submit" value="Postar!" name="acao">
				</form>
			</div><!-- feed-form -->
			<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>
		<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
					<img src="<?php echo INCLUDE_PATH_STATIC ?>images/post-placeholder.png" />
				</div>
			</div>

			<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>
			<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>

						<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>

						<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>
		</div>

			<div class="friends-request-feed">
				<h4>Solicitações de amizade</h4>

				<?php 
					foreach(\DankiCode\Models\UsuariosModel::listarAmizadesPendentes() as $key=>$value){
						$usuarioInfo = \DankiCode\Models\UsuariosModel::getUsuarioById($value['enviou']);

				?>

				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					<div class="friend-request-single-info">
						<h3><?php echo $usuarioInfo['nome'] ?></h3>
						<p><a href="<?php echo INCLUDE_PATH ?>?aceitarAmizade=<?php echo $usuarioInfo['id']; ?>">Aceitar</a> | <a href="<?php echo INCLUDE_PATH ?>?recusarAmizade=<?php echo $usuarioInfo['id']; ?>">Recusar</a></p>
					</div>
				</div>

				<?php } ?>
			</div>
		</div><!--feed-->
	</section>


</body>


</html>