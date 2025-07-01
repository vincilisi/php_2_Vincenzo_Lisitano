<?php
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Luca', 'surname' => 'Rossi', 'gender' => 'M'],
  ['name' => 'Giulia', 'surname' => 'Verdi', 'gender' => 'F']
];

foreach ($users as $user) {
    $saluto = "Buongiorno ";

    switch (strtoupper($user['gender'])) {
        case 'M':
            $saluto .= "Sig. ";
            break;
        case 'F':
            $saluto .= "Sig.ra ";
            break;
        default:
            // Nessun titolo se genere non binario o sconosciuto
            break;
    }

    $saluto .= "{$user['name']} {$user['surname']}";

    echo $saluto . PHP_EOL;
}