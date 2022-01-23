<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.

define('CONSTANTE', 12);
define('CONSTANTE2', 2);

echo CONSTANTE * CONSTANTE2."<br>";

define('CONSTANTE3', "C'est cool PHP");
echo (CONSTANTE + CONSTANTE2) * strlen(CONSTANTE3);
/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.

echo basename(__FILE__)."<br>";
echo basename(__DIR__)."<br>";
echo basename(__LINE__)."<br>";
echo basename(__FUNCTION__)."<br>";
echo basename(__CLASS__)."<br>";
echo basename(__METHOD__)."<br>";
echo basename(__NAMESPACE__)."<br>";
echo basename(__TRAIT__)."<br>";