<?php

function ptbrcap($phrase)
{

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

    mb_internal_encoding("UTF-8");

    function mb_ucfirst($string){
        $encoding = 'UTF-8';
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, null, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }

    $eachWord = explode(' ', mb_strtolower($phrase));

    for ($i = 0; $i < count($eachWord); $i++) {
        $foundMatch[$i] = 0;
        for ($j = 0; $j < count($lowercases); $j++) { // verifica se a palavra deveria ser lowercase.
            if ($eachWord[$i] == $lowercases[$j]) {
                $eachWord[$i] = mb_strtolower($eachWord[$i]);
                $foundMatch[$i] = 1;
                continue;
            }
        }
        if ($foundMatch[$i] == 0) {
            for ($j = 0; $j < count($uppercases); $j++) { // verifica se a palavra deveria ser uppercase.
                if ($eachWord[$i] == $uppercases[$j]) {
                    $eachWord[$i] = mb_strtoupper($eachWord[$i]);
                    $foundMatch[$i] = 1;
                    continue;
                }
            }
        }
        if ($foundMatch[$i] == 0) {
            $eachWord[$i] = mb_ucfirst($eachWord[$i]);
        }
        if ($i == 0) {
            $phrase = $eachWord[$i];
        } else {
            $phrase = $phrase . ' ' . $eachWord[$i];
        }
    }
    return $phrase;
}
