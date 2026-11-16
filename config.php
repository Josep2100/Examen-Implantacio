<?php

define('APP_TITLE', 'Biblioteca');

// Configuració de MySQL.
define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_NAME', 'iaw_biblioteca');
define('DB_USER', 'iaw_biblioteca');
define('DB_PASSWORD', 'examen');

// Els formularis utilitzen GET per defecte. Es pot canviar a 'post'.
define('FORM_METHOD', 'get');

define('TABLE_NAME', 'Llibres');

// La clau size s'utilitza tant per crear la taula com per als formularis.
define('FIELDS', [
    'titol' => [
        'label' => 'Títol',
        'sql' => 'VARCHAR(150)',
        'size' => 150,
        'type' => 'text'
    ],
    'autor' => [
        'label' => 'Autor',
        'sql' => 'VARCHAR(100)',
        'size' => 100,
        'type' => 'text'
    ],
    'editorial' => [
        'label' => 'Editorial',
        'sql' => 'VARCHAR(100)',
        'size' => 100,
        'type' => 'text'
    ],
    'any' => [
        'label' => 'Any',
        'sql' => 'YEAR',
        'size' => 4,
        'type' => 'number'
    ],
    'isbn' => [
        'label' => 'ISBN',
        'sql' => 'VARCHAR(20)',
        'size' => 20,
        'type' => 'text'
    ],
    'preu' => [
        'label' => 'Preu',
        'sql' => 'DECIMAL(10,2)',
        'size' => 10,
        'type' => 'number'
    ]
]);
