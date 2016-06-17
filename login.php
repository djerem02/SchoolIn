<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.min.css" media="screen">
		<title>SchoolID</title>
		<style type="text/css">
			body {
				/*background: rgb(0,255,255);*/
			}
		</style>
	</head>
	<body>
		<?php
			if (!empty($_POST) && isset($_POST['email']) && !empty($_POST['email'])) {

				include 'connect.php';

				$email 		= mysqli_escape_string($link,$_POST['email']);
				$password 	= mysqli_escape_string($link,$_POST['password']);

				$sql = "SELECT * FROM si_users WHERE email LIKE '$email' AND password = '$password' LIMIT 1"; //pseudo = email

				$req = mysqli_query($link,$sql);

				$data = mysqli_fetch_assoc($req);

				if (empty($data)) {

					$erreur = "<i>Compte invalide. Veuillez réessayez s'il vous plaît.</i>";

					/*
					echo "Ok : pseudo disponible.";

					$ip = $_SERVER['REMOTE_ADDR'];

					$sql = "INSERT INTO si_users(pseudo, ip, date) VALUES('$pseudo','$ip',".time().") ";

					$req = mysqli_query($link,$sql) or die(mysql_error());

					$idTchat = mysqli_insert_id($link);
					//*/

				} else {

					$idTchat = $data['id'];
					//echo "Pseudo déjà utilisé.";
					/*
					if ( ($data['ip'] == $_SERVER['REMOTE_ADDR']) && ( (time()-$data['date']) < 5) ) { // 5 secondes

						$idTchat = $data['id'];
					
					} elseif ( (time()-$data['date']) > 5 ) { // 5 secondes
					
						$idTchat = $data['id'];
					
					} else {

						$erreur = "Ce pseudo est déjà en cours d'utilisation.";
					}
					*/
				}

				if (!isset($erreur)) {
					//*
					$_SESSION['email'] = $_POST['email'];

					$_SESSION['id_user'] = $idTchat;

					header('location:group.php');
					//*/
				}
			}
		?>
		<div id="contenu" class="container">
			<div id="debug"></div>
			<h1>SchoolIn</h1>

			<form class="form-horizontal" role="form" action="login.php" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Adresse e-mail :</label>
					<div class="col-sm-3">
						<input type="email" class="form-control" name="email" id="email" placeholder="Saisissez votre adresse e-mail">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="password">Mot de passe :</label>
					<div class="col-sm-3">
						<input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2"></label>
					<div class="col-sm-3">
						<button type="submit" class="btn btn-default">Demo</button>
					</div>
				</div>
			</form>

			<?php

				if (isset($erreur)) {
					
					echo "<p style='color:red'>$erreur</p>";
				}
			?>

		</div> <!--/.container-->
		<script type="text/javascript" src="js/jquery-3.0.0.min.js">
			//* placer le focus automatiquement au chargement de la page (marche pas)
			$( document ).ready(function() {
				$('#email').focus();
			});
			//*/
		</script>
	</body>
</html>