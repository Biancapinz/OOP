<?php

class Cachorro{

        public $nome;
        public $especie;
        public $porte;
        public $nivelEnergia;
        public $vacinado;
        public $vermifugado;
        public $sociavel;
        public $adestrado;
        public $cadastro;
        
        public function exibirFicha() : string {
            return "Olá, meu nome é {$this->nome} e sou da raça {$this->especie}  <br> ";
        }          
        public function atualizarPorte() : string {
            return "O porte do {$this->nome} é {$this->porte}  <br> ";
        }      
        public function verificarNivelDeEnergia() : string {
            return " O {$this->nome}  Tem nível de energia {$this->nivelEnergia}  <br> ";
        }   
        public function verificarSociavel() : string {
            return " O {$this->nome}  é  {$this->sociavel}  <br> ";
        }    
        public function verificaradestrado() : string {
            return " O {$this->nome}  é {$this->adestrado}  <br> ";
        } 
        public function verificarvacina() : string {
            return "O status de vacinação do {$this->nome} é {$this->vacinado}   <br> ";
        }    
        public function  marcarComoVermifugado() : string {
            return "O {$this->nome} é {$this->vermifugado}  <br> ";
        }  
        public function desmarcarVermifugado() : string {
            return "desmarcando <br> <br>";
        }    
        public function  resumoAnimal() : string {
            return "Nome:{$this->nome} <br> Espécie:{$this->especie} <br> vacina: {$this->vacinado}  <br> <br>";
        }  
        public function verificarSexo() : string {
            return "O sexo do animal é {$this->sexo}";
        }     
    }

?>