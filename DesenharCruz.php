<?php

    class DesenharCruz {
        private $tamanho;

        public function __construct($tamanho) {
            $this->tamanho = $tamanho;
        }

        public function desenhar() {
            for ($linha = 1; $linha <= $this->tamanho; $linha++) {
                for ($coluna = 1; $coluna <= $this->tamanho; $coluna++) {
                    if ($linha == ceil($this->tamanho/2) - 1 || $coluna == ceil($this->tamanho/2)) {
                        echo "*";
                    } else {
                        echo ".";
                    }
                }
                echo "\n";
            }
        }
    }

    // Cria um objeto com tamanho 5
    $desenhoCruz = new DesenharCruz(5);

    // Desenha a "Cruz"
    $desenhoCruz->desenhar();

?>