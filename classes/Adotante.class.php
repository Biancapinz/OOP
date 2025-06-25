<?php

class Adotante {
    private $nome;
    private $idade;
    private $telefone;
    private $email;
    private $endereco;
    private $temOutrosAnimais;
    private $experienciaComPets;
    private $animalAdotado;

    public function __construct($nome, $idade, $telefone, $email, $endereco, $temOutrosAnimais, $experienciaComPets) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->temOutrosAnimais = $temOutrosAnimais;
        $this->experienciaComPets = $experienciaComPets;
        $this->animalAdotado = null;
    }

    public function exibirAdotante() {
        echo "Nome: $this->nome\n";
        echo "Idade: $this->idade\n";
        echo "Telefone: $this->telefone\n";
        echo "Email: $this->email\n";
        echo "Endereço: $this->endereco\n";
        echo "Tem outros animais? " . ($this->temOutrosAnimais ? "Sim" : "Não") . "\n";
        echo "Experiência com pets: $this->experienciaComPets\n";
        echo "Animal adotado: " . ($this->animalAdotado ? $this->animalAdotado->resumoAnimal() : "Nenhum") . "\n";
    }

    public function adotarAnimal($animal) {
        $this->animalAdotado = $animal;
        $animal->alterarStatus("adotado");
    }

    public function verificarIdade() {
        return $this->idade >= 18 ? "Pode adotar" : "Menor de idade";
    }

    public function temExperiencia() {
        return is_string($this->experienciaComPets) ? $this->experienciaComPets : ($this->experienciaComPets ? "Sim" : "Não");
    }

    public function listarContato() {
        echo "Contato: $this->telefone | $this->email\n";
    }

    public function verificarOutrosAnimais() {
        return $this->temOutrosAnimais ? "Sim" : "Não";
    }

    public function cancelarAdocao() {
        $this->animalAdotado = null;
    }

    public function resumoAdotante() {
        echo "Adotante: $this->nome\n";
        if ($this->animalAdotado) {
            $this->animalAdotado->resumoAnimal();
        } else {
            echo "Nenhum animal adotado\n";
        }
    }
}
