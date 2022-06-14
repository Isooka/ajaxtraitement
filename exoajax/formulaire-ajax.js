$(document).ready(function() {
    // Action qui est exécutée quand le formulaire est envoyé ( #connexion est l'ID du formulaire)
    $('form').on('submit', function(e) {
      e.preventDefault(); // On empêche de soumettre le formulaire
      var $this = $(this); // L'objet jQuery du formulaire
      // Envoi de la requête HTTP en mode asynchrone
      $.ajax({
        url: $this.attr('action'), // On récupère l'action (ici action.php)
        type: $this.attr('method'), // On récupère la méthode (post)
        data: $this.serialize(), // On sérialise les données = Envoi des valeurs du formulaire
        dataType: 'json', // JSON
        success: function(json) { // Si ça c'est passé avec succès
          // ici on teste la réponse
          if(json.reponse === 'ok') {
            alert('Connexion OK');
            // On peut aussi rediriger vers l'index
            window.location.href = 'index.php';
          } else {
            alert('Erreur : '+ json.reponse);
          }
        }
      });
    });
  });