<!DOCTYPE html>
<html>
<head>
	<!--ALTERAR TITULO-->
	<title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/d709ea726d.js" crossorigin="anonymous"></script>
	<link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/comunidade.css" rel="stylesheet">


</head>

<body>

	<section class="main-feed">
		<?php 
			include('includes/sidebar.php'); 
		?>
		<div class="feed">
			<div class="comunidade">
			<div class="container-comunidade">
					<h4>Amigos</h4>
					<div class="container-comunidade-wraper">
						<?php foreach(\DankiCode\Models\UsuariosModel::listarAmigos() as $key => $value){ ?>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2><?php echo $value['nome']; ?></h2>
								<p><?php echo $value['email']; ?></p>
							</div>

						</div>
						<?php } ?>
					</div>
			</div>
			<br/>

				<div class="container-comunidade">
					<h4>Comunidade</h4>
					<div class="container-comunidade-wraper">
						
						<?php 
							$comunidade = \DankiCode\Models\UsuariosModel::listarComunidade();

							foreach ($comunidade as $key => $value) {

								$pdo = \DankiCode\MySql::connect();
								$verificaAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ? AND status = 1) OR (enviou = ? AND recebeu = ? AND status = 1)");


								$verificaAmizade->execute(array($value['id'],$_SESSION['id'],$_SESSION['id'],$value['id']));
								if($verificaAmizade->rowCount() == 1){
									/* Já são amigos, não existe necessidade de listar */
									continue;
								}
								
								if($value['id'] == $_SESSION['id']){
									continue;
								}
							
						?>

						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2><?php echo $value['nome']; ?></h2>
								<p><?php echo $value['email']; ?></p>
							<div class="btn-solicitar-amizade">
								<?php 
									if(\DankiCode\Models\UsuariosModel::existePedidoAmizade($value['id'])){
								?>
								<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=<?php echo $value['id']; ?>">Solicitar Amizade</a>
							<?php }else{ ?>	

								<a href="javascript:void(0)" style="color: orange; border:0;">pedido pendente</a>
							<?php } ?>
							</div>
							</div>
							
						</div>

					<?php } ?>

					</div>
			</div>
			</div>
		</div><!--feed-->
	</section>


</body>


</html>