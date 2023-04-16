
## COMO INCIAR
O projeto pode ser iniciado de 2 formas, executando cada classe individualmente ou executando apenas um arquivo.

## INICIAR AMBOS DESENHOS JUNTOS
    - php index.php

## INICIAR OS DESENHOS SEPARADOS
    - php DesenharX.php
    - php DesenharCruz.php
    
    
## CRIAÇÃO DA CRUZ

Primeiro, definimos um tamanho e abrimos um loop for que itera pelas linhas da cruz. Em seguida, abrimos outro loop for que itera pelas colunas da cruz.

Dentro do segundo loop for, verificamos se a posição atual é uma posição em que um asterisco deve ser impresso. A condição que usamos para verificar isso é if ($linha == ceil($this->tamanho/2) - 1 || $coluna == ceil($this->tamanho/2)). Esta condição verifica se a linha atual é a linha central (ou seja, a linha cujo índice é igual a ceil($size/2) - 1, onde ceil é uma função PHP que arredonda para cima) ou se a coluna atual é a coluna central (ou seja, a coluna cujo índice é igual a ceil($size/2)).

Se a condição for verdadeira, imprimimos um asterisco (echo "*";). Caso contrário, imprimimos um ponto (echo ".";).

Por fim, imprimimos uma quebra de linha (echo "\n";) para que a próxima linha da cruz seja impressa na linha seguinte.


## CRIAÇÃO DO X

Nessa solução, utilizamos dois loops for aninhados para percorrer cada posição da cruz. Na condição do if, verificamos se a posição atual está na diagonal principal (ou seja, se a posição da linha é igual à posição da coluna) ou na diagonal secundária.

Quando a condição é verdadeira, imprimimos um asterisco. Caso contrário, imprimimos um ponto. Por fim, utilizamos a função echo para imprimir uma quebra de linha (\n) após imprimir cada linha da cruz.
