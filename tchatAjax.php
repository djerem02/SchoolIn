<?php

	session_start();

	require("connect.php");

	$d = array();

	//if (!isset($_SESSION['pseudo']) || empty($_SESSION['pseudo']) || !isset($_POST['action'])) {

		//$d['erreur'] = "Vous devez être connecté pour utiliser le tchat";
	
	//} else {

		extract($_POST);

		//$pseudo = mysqli_escape_string($link,$_SESSION['pseudo']);
		
		/**
		* Action : addMessage
		* Permet l'ajout d'un message
		**/
		if ($_POST['action'] == "addMessage") {
		
			$message = mysqli_escape_string($link,$_POST["message"]);
		
			$sql = "INSERT INTO si_messages(id_user,message,date) VALUES ('" . $_SESSION['id_user'] . "','$message',".time().")";
		
			//mysqli_query($link,$sql) or die(mysql_error());
		
			$d['erreur'] = "ok";
		}

		/**
		* Action : getMessages
		* Permet l'affichage des derniers messages
		**/
		if ($_POST['action'] == "getMessages") {
		
			$lastid = floor($lastid);
			//$lastid = floor($_POST['lastid']);

			$sql = "SELECT * FROM messages WHERE id > $lastid ORDER BY date ASC ";

			$req = mysqli_query($link,$sql) or die(mysql_error());

			$d['result'] = "";

			$d['lastid'] = $lastid;

			while ($data = mysqli_fetch_assoc($req)) {

				$d['result'] .= '<p><strong>'.$data["pseudo"].'</strong> (' . date("d/m/Y H:i:s", $data['date']) .') : '.htmlentities($data['message']).'</p>';

				$d['lastid'] = $data['id'];
			}

			$d['erreur']="ok";
		}

		/**
		* Action : getConnected
		* Permet l'affichage des derniers connectés
		**/
		if ($_POST['action']=='getConnected') {
			
			$now = time();

			$sql = "SELECT * FROM connected WHERE ($now-date) < 5 "; // 5 secondes
			
			$req = mysqli_query($link, $sql) or die(mysql_error());

			$d['result'] = "Connectés : ";

			while ($data = mysqli_fetch_assoc($req)) {
				
				$d['result'] .= $data['pseudo'].", ";
			}

			$d['result'] = substr($d['result'],0,-2);

			$sql = "UPDATE connected SET date = $now WHERE id=" . $_SESSION['idTchat'] ;

			$req = mysqli_query($link, $sql) or die(mysql_error());

			$d['erreur'] = "ok";
			
		}
	//}

	echo json_encode($d);
?>