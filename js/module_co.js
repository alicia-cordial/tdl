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


// TRAITEMENT DE LA CONNEXION
$('#connexion').click(function(e) {
    e.preventDefault();

    // $.post --> $.ajax type:post
    $.post(
        // page vers laquelle le traitement va etre fait
        'api.php',

        {
            login: $('#login').val(), // Nous récupérons la valeur de nos inputs que l'on fait passer à connexion.php
            password: $('#password').val()
        },

        function(data) {
            if (data == 'Success') {
                // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                window.location.href = "todolist.php";
            } else {
                // Le membre n'a pas été connecté. (data vaut ici "failed")

                $("#resultat").html("<p>Erreur lors de la connexion...</p>");
            }
        },
        'text'
    );
});
// FIN TRAITEMENT CONNEXION


// TRAITEMENT INSCRIPTION
$('#sinscrire').click(function(e) {
    e.preventDefault();
    // $.post --> $.ajax type:post
    $.post(
        'api.php',

        {
            username: $('#username').val(),
            insc_password: $('#insc_password').val(),
            conf_password: $('#conf_password').val()
        },

        function(data) {
            if (data == 'Success') {
                $("#final").html("<p>Vous venez d'être inscrit</p>");
                window.location.href = "todolist.php";
            } else {
                $("#final").html("<p>Username déjà pris, ou vos mots de passe ne sont pas identiques</p>");
                console.log(data);
            }
        },
        'text'
    );
})