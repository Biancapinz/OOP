<?php

class Animal {
    // Atributos
    protected $nome;
    protected $especie;
    protected $idade;
    protected $sexo;
    protected $peso;
    protected $cor;
    protected $status;
    protected $chipado;

    // Construtor
    public function __construct($nome, $especie, $idade, $sexo, $peso, $cor, $status = "disponível", $chipado = false) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->cor = $cor;
        $this->status = $status;
        $this->chipado = $chipado;
    }

    public function exibirFicha() {
        echo "Nome: $this->nome\n";
        echo "Espécie: $this->especie\n";
        echo "Idade: $this->idade anos\n";
        echo "Sexo: $this->sexo\n";
        echo "Peso: $this->peso kg\n";
        echo "Cor: $this->cor\n";
        echo "Status: $this->status\n";
        echo "Chipado: " . ($this->chipado ? "Sim" : "Não") . "\n";
    }

    public function atualizarPeso($peso) {
        $this->peso = $peso;
    }

    public function alterarStatus($novoStatus) {
        $this->status = $novoStatus;
    }

    public function verificarIdade() {
        if ($this->idade < 2) {
            return "Filhote";
        } elseif ($this->idade < 8) {
            return "Adulto";
        } else {
            return "Idoso";
        }
    }

    public function marcarComoChipado() {
        $this->chipado = true;
    }

    public function desmarcarChipado() {
        $this->chipado = false;
    }

    public function resumoAnimal() {
        echo "Nome: $this->nome, Espécie: $this->especie, Status: $this->status\n";
    }

    public function verificarSexo() {
        return $this->sexo;
    }
}
