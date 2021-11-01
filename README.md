# php-capitalize-pt-br ![BUILD](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
 Esta biblioteca basicamente está resumida em uma única função.</br>
 Ela capitaliza uma frase para o padrão brasileiro de capitalização.

# Como usar
 Primeiramente, deve-se fazer um require_once do arquivo 'ptbrcap.php';
 Para utilizar, basta passar a sua frase dentro da funcao ptbrcap();

# Exemplos
 ```
$frase = 'ANDROVANDRO DAS DORES DA ROSA';
echo ptbrcap($frase) // retorna: Androvandro das Dores da Rosa
 
$frase = 'capixaba de floriculturismo ltda';
echo ptbrcap($frase) // retorna: Capixaba de Floriculturismo LTDA
```
