<?php

    class Pessoa {

        public $idade = 29;

        public function falar() {

            echo "Olá Mundo! <br>";

        }

        private function gritar() {
            echo "PHP É MUITO BOOOOM!! <br>";
        }

        public function pegarGritar() {
            $this->gritar();
        }

        protected function sussurrar() {
            echo "sussurrando agora... sshhhh... <br>";
        }

        public function pegarSussurrar() {
            $this -> sussurrar();
        }

    }

    class Programador extends Pessoa { // Aqui estou declarando que a classe programador vai herdar a herança da classe pessoa.

    }

    $ze = new Pessoa;

    $ze->falar();
    $ze->pegarGritar();
    $ze->pegarSussurrar();

    $jose = new Programador;

    echo $jose->idade . "<br>";
    $jose->falar();
    $jose->pegarGritar();
    $jose->pegarSussurrar();

    // Note que como a class Programador herdou a herança na classe Pessoa, o objeto $jose que é da classe programador tem as mesma propriedades e métodos que o $ze que é da classe Pessoa.

?>