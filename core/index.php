<?php

use Symfony\Component\VarDumper\Server\DumpServer;

define('WEBROOT', dirname(__DIR__));


define('TARGET_PATH', WEBROOT.'/contents');
?>

<?php

//Mise en place de notre routeur

require '../vendor/autoload.php';

// On crée une instance AltoRouter
// Permet en fonction d'une URL de définir une cible
$router = new AltoRouter();

/*Facultativement, si notre projet réside dans un sous-dossier de votre racine Web,
on va utiliser la méthode setBasePath () pour définir un chemin de base.
$router->setBasePath('/DevProjects/xampp/htdocs/kpitalis.com/core/);
*/

require_once '../config/routes.php';


// La variable $match est un tableau la valeur de retour de la fonction initiée
$match = $router->match();
/*
exemple de contenu du tableau
array:3 [
  "target" => "object(Closure)#2 (0) { }"
  "params" => array(0) { }
  "name" => "route_name"
]
*/
//dump($match);

$target = $match['target'];
$params = $match['params'];

if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($target, $params);
    } else {
        ob_start();
        require TARGET_PATH."/{$target}.php";
        $pageView = ob_get_clean();
    }
    require TARGET_PATH."/frame/layout.php";
} else {
    require TARGET_PATH."/error.php";
}
