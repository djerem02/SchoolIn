
// Si l'url change, on la change qu'une seule fois
var url = 'tchatAjax.php';

// Check de nouveaux messages toutes les 4 secondes
//var timer = setInterval(getMessages, 1000);

// Check des personnes connectées
var ctimer = setInterval(getConnected, 1000);

// Fonction globale JQuery
$(function() {

	// Le dernier id du dernier msg
	var lastid=$('#lastid').val();

	// Affichage des personnes connectées
	getConnected();
	
	// Envoi d'un message tchat
	$('#tchatForm').submit(function() {
		
		// Arrêt du timer : sais plus trop bien pk
		//clearInterval(timer);

		// Marche pas pour le moment parce qu'on n'a pas défini de style pour la classe loader
		showLoader('#tchatForm');
		
		// On récupère le message à envoyer
		var message = $('#tchatForm textarea').val();

		
		// On l'envoit en méthode ajax
		$.post(url, {action:'addMessage',message:message}, function(data) {
			
			// Debug : On teste la valeur retourné par le traitement ajax
			if (data.erreur == 'ok') {

				console.log('addMessage : ok');

				// On affiche les derniers messages après avoir envoyé un message pour l'afficher...
				getMessages();

				// ... Et on vide le textarea
				$('#tchatForm textarea').val("");
			
			} else {
				
				console.log('addMessage : '+data.erreur);
			}

			console.log('checkDebug : pendant traitement ajax addMessage');				

			// On relance le timer
			//timer = setInterval(getMessages, 1000);
			// Ne marche pas (sais pas pk)
			hideLoader();
			
		}, 'json');

		/*

		$.ajax({
			type: "POST",
			url:url,
			data:{action:'addMessage',message:message},
			success:function(data) {
				// Debug : On teste la valeur retourné par le traitement ajax
				if (data.erreur == 'ok') {
					// On affiche les derniers messages après avoir envoyé un message pour l'afficher...
					getMessages();
					// ... Et on vide le textarea
					$('#tchatForm textarea').val("");
					console.log('addMessage : ok');
				} else {
					console.log('addMessage : '+data.erreur);
				}

				// On relance le timer
				timer = setInterval(getMessages, 1000);
				// on enlève le loader si on en a un
				hideLoader();		
			},
			dataType:'json'
		});

		//*/
		console.log('checkDebug : après traitement ajax addMessage');
		
		// Sais pas trop à quoi ça sert
		return false;
	})
});

//*

// Récupération des derniers messages
function getMessages() {
	
	// On envoit lastid en méthode ajax (pourquoi ? je sais pas : il vaut 0 -> la 1ère fois : après il change apparemment)
	$.post(url, {action:'getMessages',lastid:lastid}, function(data) {
			
		// Debug : On teste la valeur retourné par le traitement ajax
		if (data.erreur == 'ok') {

			//console.log('getMessages : "ok"');

			$('#tchat').append(data.result);

			lastid = data.lastid;
			
		} else {
				
			console.log("getMessages : "+data.erreur);
		}
			
	}, 'json');
/*
	$.ajax({
		type: "POST",
		url:url,
		data:{action:'getMessages',lastid:lastid},
		success:function(data) {
			// Debug : On teste la valeur retourné par le traitement ajax
			if (data.erreur == 'ok') {
				$('#tchat').append(data.result);
				lastid = data.lastid;
				console.log('getMessages : ok');
				} else {
					console.log('getMessages : '+data.erreur);
				}
			},
		dataType:'json'
	});
	*/
	// Sais pas trop à quoi ça sert
	return false;
}

//*/

// Récupération des personnes connectées
function getConnected() {
	
	$.post(url, {action:'getConnected'}, function(data) {
			
		// Debug : On teste la valeur retourné par le traitement ajax
		if (data.erreur == 'ok') {

			console.log('getConnected : "ok"');

			$('#connected').empty().append(data.result);

		} else {
				
			console.log("getConnected : "+data.erreur);
		}
			
	}, 'json');
		
	// Sais pas trop à quoi ça sert
	return false;
}

// Affichage d'un loader lors de l'envoi d'un message
function showLoader(div) {
	
	// Après avoir associé un style à la classe loader pour un afficher un loader
	$(div).append('<div class="loader"></div>');
	
	$('.loader').fadeTo(500,0.9);
}

// Suppression du loader après l'envoi du msg
function hideLoader(div) {
	
	$('.loader').fadeOut(500,function(){

		$(".loader").remove();
	});
}