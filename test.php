<?php
    //Fichier différent de Crepe.php
    //require permet de lier, d'inclure et exécuter le fichier spécifié
    require './Crepe.php';
    $crepe_au_nutella = new Crepe(4, 50, 1, 10, 4, 500, 5,0,30,[]); //on indique la quantité des attributs, au nutella
    $crepe_a_orange = new Crepe(4, 50, 1, 10, 4, 500, 5,0.5,0,[]); //on indique la quantité des attributs, à l'orange
    // $crepe_au_nutella->afficher_recette(); //Exécute la fonction afficher_recette()
    // $crepe_a_orange->afficher_recette(); //Exécute la fonction afficher_recette()
    // var_dump($crepe_au_nutella);
    // var_dump($crepe_a_orange);

    //  On modifie la quantité d'oeuf et on l affiche
    $crepe_au_nutella->setOeuf(5);
    echo $crepe_au_nutella->getOeuf()."\n";

    // On modifie le topping, on ajoute un suppléments à notre crêpe
    $crepe_au_nutella->addTopping("chantily","caramel","miel","confiture");
    // var_dump ($crepe_au_nutella->getTopping());

    $crepe_au_nutella->destroy("chantily");
    // var_dump ($crepe_au_nutella->getTopping());
?>