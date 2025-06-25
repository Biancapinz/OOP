<?php

class Gato{

        public $nome;
        public $pelagem;
        public $castrado;
        public $independente;
        public $vacinado;
        public $curioso;
        public $adoraColo;
        public $usaCaixaDeAreia;
        public $cadastro;

        public function exibirFicha() : string {
            return "Olá, meu nome é {$this->nome} e tenho pelagem  {$this->pelagem}  <br> ";
        }          
        public function verificarcadastro() : string {
            return "cadastro  do {$this->nome} é {$this->cadastro} <br> ";
        }      
        public function verificarindependente() : string {
            return "independente: {$this->independente}  <br> ";
        }      
        public function verificarvacina() : string {
            return "O {$this->nome} é  vacinado:{$this->vacinado}   <br> ";
        }    
        public function  marcarcaracteristicas() : string {
            return "O {$this->nome} é {$this->curioso},{$this->adoraColo} e {$this->usaCaixaDeAreia}<br> ";
        }  
    
        }      
    



?>