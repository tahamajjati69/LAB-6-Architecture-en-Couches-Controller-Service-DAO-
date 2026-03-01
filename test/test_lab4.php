<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Container\AppFactory;
use App\Controller\Response;

function printResponse(string $label, Response $res): void {
    echo "[RESPONSE] $label => success=" . ($res->isSuccess() ? 'true' : 'false');
    if ($res->isSuccess()) {
        echo ' data=' . json_encode($res->getData(), JSON_UNESCAPED_UNICODE) . PHP_EOL;
    } else {
        echo ' error=' . $res->getError() . PHP_EOL;
    }
}

$ctrl = AppFactory::createController();
//0
$r1 = $ctrl->handle([
    "action" => "create_filiere_then_student",
    "code" => "bio",
    "libelle" => "Biologie",
    "cne" => "CNE7777",
    "nom" => "Test",
    "prenom" => "Tx",
    "email" => "test.tx@example.com"
]);
printResponse("Create Filiere + Etudiant", $r1);
// 1
$r2 = $ctrl->handle([
    'action' => 'create_etudiant',
    'cne' => 'CNE12345',
    'nom' => 'Doee',
    'prenom' => 'Janne',
    'email' => 'jane@mailinator.com',
    'filiere_id' => 1
]);
printResponse('Email interdit !', $r2);
//2
$r3 = $ctrl->handle([
    'action' => 'create_etudiant',
    'cne' => 'ABC99990',
    'nom' => 'Bader',
    'prenom' => 'Cne',
    'email' => 'oke@example.com',
    'filiere_id' => 1
]);
printResponse('CNE invalide !', $r3);
//3
$r4 = $ctrl->handle([
    'action' => 'delete_filiere',
    'id' => 1
]);
printResponse('Suppression filière interdite', $r4);
