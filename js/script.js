// PAGE INDEX MODULE DE CO
var inscription = $('#inscription'); // formulaire inscription
var connexion = $('#connect'); // formulaire connexion

var formins = $('#form_inscription'); // lien vers le formulaire d'inscription
var formco = $('#form_connexion'); // lien vers le formulaire de connexion

inscription.hide();

formins.click(function() {
    inscription.show();

    if (inscription.css('display') == 'block') {
        connexion.hide();
    }
});

formco.click(function() {
    connexion.show();

    if (connexion.css('display') == 'block') {
        inscription.hide();
    }
});

// FIN AFFICHAGE DES FORMS