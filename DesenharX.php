<?php

    class DesenharX {
        private $tamanho;

        public function __construct($tamanho) {
            $this->tamanho = $tamanho;
        }

        public function desenhar() {
            for ($linha = 1; $linha <= $this->tamanho; $linha++) {
                for ($coluna = 1; $coluna <= $this->tamanho; $coluna++) {
                    if ($coluna == $linha || $coluna == ($this->tamanho - $linha + 1)) {
                        echo "*";
                    } else {
                        echo ".";
                    }
                }
                echo "\n";
            }
        }
    }

    // Cria um objeto DesenharX com tamanho 5
    $xDesenho = new DesenharX(5);

    // Desenha o padrão "X"
    $xDesenho->desenhar();

?>