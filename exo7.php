<?php

while(true) {

    echo "ecrire un mot:    ";
    $mot = readline();
    //Chaîne de caractères


    echo "Mot : " . $mot . "\n";

    echo "Que voulez-vous faire ?
    ";

    echo "-- Entrez '1' palindrome.
    ";
    echo "-- Entrez '2' comptage.
    ";
    echo "-- Entrez '3' remplace lettre.
    ";
    echo "-- Entrez '4' separation
    ";
    echo "Que voulez-vous faire ?:    ";
    $choix = readline();
    //Sélectionner le choix



    //choix 1

    switch ($choix) {

    case 1:

        $reverse = strrev($mot);

        if ($mot == $reverse){

            echo "Ceci est un palindrome" . "\n";//Lecture "Ceci est un palindrome"

        }

        else {

            echo "Ceci n'est pas un palindrome" . "\n";//Lecture "Ceci n'est pas un palindrome"

        }

    break;



    //choix 2

    case 2:

        strlen($mot);//Retourne le nombre de caractères

        echo strlen($mot) . " lettres\n";//Lecture nombre de caractères

    break;



    //choix 3

    case 3:

        echo "lettre a mettre :"
        ;
        $remp = readline();//La lettre remplacée
        echo "lettre atuelle:"
        ;
        $val = readline(); //La lettre actuelle

        $bodytag = str_replace($val,$remp,$mot);

        echo ($bodytag) . "\n";//Affichage bodytag


    break;



    //choix 4

    case 4:

        $depart=0;

        $milieu=strlen($mot)/2;//Mot divisé par 2

        $mot1= substr($mot, $depart, $milieu);//Retourne un segment de chaîne

        $mot2= substr($mot, $milieu, strlen($mot));//Retourne un segment de chaîne

        echo $mot1."/";//Affichage mot1

        echo $mot2."\n";//Affichage mot2

    break;

    // tan que la bouche et vrai on reste dedans
}


      echo "voulez vous coucher avec moi o/n";

      $quitter=readline();

      //sert a quitter la boucle

      if ($quitter=="o"){

        break;
}
}
