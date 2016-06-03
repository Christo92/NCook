$('body').ready(function () {


    //bouton like
    $(".like i").click(function () {
        $(".like i").toggleClass("likeactive", 1000);
    });





    //favoris

    /*
     $(".flaticon-star").click(function () {
     $(this).toggleClass("likeactive", 1000);
     });
     */

    $(".modale").on("click", ".flaticon-star", function () {
        $(this).toggleClass("likeactive", 1000);
    });




    //favoris profil
    $(".fav-profil").click(function () {
        $(this).toggleClass("likeactive", 1000);
    });


    //MODALE

    //cacher la modale

    //charger et afficher modale si elle n'est pas déjà charger
    $(".entreeMarine").click(function () {
        var element = $("#fiche_recette");
        if (element.length > 0) {
            $("#fiche_recette").show();
        } else {
            $.ajax({
                url: "includes/recette1.php"
            }).done(function (rep) {
                $(rep).appendTo(".modale");
            });
        }
        console.log(element.length);
    });

    $(".modale").on("click", ".cross", function () {
        $("#fiche_recette").hide();
    });

});

