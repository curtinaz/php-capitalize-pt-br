<?php

function ptbrcap ($phrase) {

    $lowercases = [
        'a',
        'com',
        'da',
        'das',
        'de',
        'do',
        'dos',
        'e',
        'em',
        'na',
        'nas',
        'no',
        'nos',
        'o',
        'por',
        'sem'
    ];
    
    $uppercases = [
        'cnpj',
        'cpf',
        'ltda',
        'qp',
        'tv',
        'mei',
        'me',
        'ei',
        'epp',
        'eireli',
        'sa'
    ];

    $eachWord = explode(' ', $phrase);
    for ($i = 0; $i < count($eachWord); $i++) {
        for ($j = 0; $j <= count($lowercases); $j++) {
            if ($eachWord[$i] == $lowercases[$j]) {
                $eachWord[$i] = strtolower($eachWord[$i]);
            }
        }
    }
    return $phrase;
}