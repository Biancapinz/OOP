
<?php

class Adotante{

        public $nome;
        public $idade;
        public $telefone;
        public $email;
        public $endereco;
        public $temOutrosAnimais;
        public $ExperienciaComPets;
        public $AnimalAdotado;
        public $cadastro;

    public function exibirFicha() : string {
            return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos. <br> ";
        }          
        public function verificarcadastro() : string {
            return "cadastro  do {$this->nome} telefone {$this->telefone}, email {$this->email} e endereço {$this->endereco} <br> ";
        }      
        public function verificarAnimais() : string {
            return "Tem outros animais? {$this->temOutrosAnimais}  <br> ";
        }      
        public function verificarExperiencia() : string {
            return "O {$this->nome} tem experiência com pets?:{$this->ExperienciaComPets}   <br> ";
        }    
        public function verificarAnimalAdotado() : string {
            return "O {$this->nome}, Telefone {$this ->telefone}, Email {$this -> email} adotou:{$this->AnimalAdotado}<br> ";
        }  
    }
?>