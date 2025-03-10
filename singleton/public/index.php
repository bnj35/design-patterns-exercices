<?php
require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

use App\Config;

// Récuperer une instance de Config
$config = Config::getInstance();

// Afficher une valeur contenu dans config.php
echo $config->get('apiKey');

// Récupérer une seconde instance de Config et vérifier que les deux instances sont identiques
$config2 = Config::getInstance();
var_dump($config === $config2); // true