<?php
require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

use App\MySQLQueryBuilder;

$queryBuilder = new MySQLQueryBuilder();
$sql = $queryBuilder
    ->select('users', ['id', 'name', 'email'])
    ->where('status', 'active')
    ->limit(0, 10)
    ->getSQL();

echo $sql;

# tout marche bien