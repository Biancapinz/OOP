<?php

class Animal{

        public $nome;
        public $especie;
        public $idade;
        public $sexo;
        public $peso;
        public $cor;
        public $status;
        public $chipado;

        public function exibirFicha() : string {
            return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos  <br> ";
        }          
        public function verificarPeso() : string {
            return "O peso do {$this->nome} é {$this->peso}Kg  <br> ";
        }      
        public function verificarStatus() : string {
            return "Status: {$this->status}  <br> ";
        }      
        public function verificarIdade() : string {
            return "A idade do {$this->nome} é {$this->idade} anos  <br> ";
        }    
        public function  marcarComoChipado() : string {
            return "O {$this->nome} é {$this->chipado}  <br> ";
        }  
        public function desmarcarChipado() : string {
            return "desmarcando <br> <br>";
        }    
        public function  resumoAnimal() : string {
            return "Nome:{$this->nome} <br> Espécie:{$this->especie} <br> Status: {$this->status}  <br> <br>";
        }  
        public function verificarSexo() : string {
            return "O sexo do animal é {$this->sexo} <br>";
        }      
    }

?>