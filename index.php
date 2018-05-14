<?php  
    
    ## Exercice 1 Créer une variable **nom** et l'initialiser avec la valeur de votre choix.  Afficher son contenu. -->
    $nom='Barthès';
    echo 'Exo 1 :'.$nom;

    ## Exercice 2 Créer trois variables **nom** , **prenom** et **age** et les initialiser avec les valeurs de votre choix.  
    // **Attention** age est de type entier.  Afficher leur contenu.
    $nom='Barthès';
    $prenom='Christophe';
    $age=46;
    echo '<br>Exo 2 : Le nom est '.$nom.', le prénom est '.$prenom.', l\'âge : '.$age;

    ## Exercic"e 3
    // Créer une variable **km**. L'initialiser à 1. Afficher son contenu.  
    // Changer" sa valeur par 3. Afficher son contenu.  
    // Changer sa valeur par 125. Afficher son contenu.
    $km=1;
    $km=3;
    $km=125;
    echo '<br>Exo 3 : '.$km;
   
    ## Exercice 4 Créer une variable de type string, une variable de type int, une variable de type float,  une variable de type booléan 
    //et les initialiser avec une valeur de votre choix.  Les afficher.
    $maString='coucou';
    $maInt=3000;
    $maFloat=1234.5;
    $maBooleen=true;
    echo '<br>Exo 4 : '; ##
    var_dump($maString);
    var_dump($maInt);
    var_dump($maFloat);
    var_dump($maBooleen);

    ## Exercice 5 Créer une variable de type int. L'initialiser avec **rien**. Afficher sa valeur. Donner une valeur à cette variable et l'afficher.
    echo '<br>Exo 5 : ';
    $maVar=NULL;
    var_dump($maVar);
    $maVar=123;
    var_dump($maVar);
    
    ## Exercice 6 Créer une variable **nom** et l'initialiser avec la valeur de votre choix.  Afficher : "Bonjour" + **nom** + ", comment vas tu ?".
    echo '<br>Exo 6 : ';
    $nom='Barthès';
    echo 'Bonjour '.$nom.', comment vas-tu ?';
    
    ## Exercice 7 Créer trois variables **nom** , **prenom** et **age** et les initialiser avec les valeurs de votre choix.  
    ## **Attention** age est de type entier.  ## Afficher : "Bonjour" + **nom** + **prenom** + ",tu as" + **age** + "ans".
    $nom='Barthès';
    $prenom='Christophe';
    $age=46;
    echo '<br>Exo 7 : Bonjour '.$nom.' '.$prenom.', tu as '.$age;


    ##Exercice 8 Créer 3 variables.  Dans la première mettre le résultat de l'opération **3 + 4**.  
    ## Dans la deuxième mettre le résultat de l'opération **5 * 20**.  Dans la troisième mettre le résultat de l'opération **45 / 5**.  
    ## Afficher le contenu des variables.
    $monOperation1=3+4;
    $monOperation2=5*20;
    $monOperation3=45/5;
    echo '<br>Exo 8 : Résultat de ma 1ère opération (3+4) : '.$monOperation1.'<br> Résultat de ma 2ème opération (5*20) : '.$monOperation2.'<br> Résultat de ma 3ème opération (45/5): '.$monOperation3;



?>




