# php-capitalize-pt-br ![BUILD](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
 Chegou a hora de eu fazer minha primeira contribuição para a comunidade do PHP.

# resumo    
 Esta biblioteca basicamente está resumida em uma única função.
 Ela capitaliza uma frase no padrão brasileiro de capitalização.

# usage
 Primeiramente, deve-se fazer um require_once do arquivo 'ptbrcap.php';
 Para utilizar, basta passar a sua frase dentro da funcao ptbrcap();

# exemplos
 $frase = 'ANDROVANDRO DAS DORES DA ROSA';
<br/>
 echo ptbrcap($frase) // retorna: Androvandro das Dores da Rosa
<br/><br/>
 $frase = 'capixaba de floriculturismo ltda';
<br/>
 echo ptbrcap($frase) // retorna: Capixaba de Floriculturismo LTDA
