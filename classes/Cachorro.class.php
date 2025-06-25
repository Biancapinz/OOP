<?php

require_once "animal.class.php";

class Cachorro extends Animal {

    private $raca;
    private $porte;
    private $nivelEnergia;
    private $vacinado;
    private $vermifugado;
    private $sociavel;
    private $adestrado;

    public function __construct($nome, $especie, $idade, $sexo, $peso, $cor, $raca, $porte, $nivelEnergia,
                                $vacinado = false, $vermifugado = false, $sociavel = false, $adestrado = false) {
        parent::__construct($nome, $especie, $idade, $sexo, $peso, $cor);
        $this->raca = $raca;
        $this->porte = $porte;
        $this->nivelEnergia = $nivelEnergia;
        $this->vacinado = $vacinado;
        $this->vermifugado = $vermifugado;
        $this->sociavel = $sociavel;
        $this->adestrado = $adestrado;
    }

    public function exibirCachorro() {
        $this->exibirFicha();
        echo "Raça: $this->raca\n";
        echo "Porte: $this->porte\n";
        echo "Nível de Energia: $this->nivelEnergia\n";
        echo "Vacinado: " . ($this->vacinado ? "Sim" : "Não") . "\n";
        echo "Vermifugado: " . ($this->vermifugado ? "Sim" : "Não") . "\n";
        echo "Sociável: " . ($this->sociavel ? "Sim" : "Não") . "\n";
        echo "Adestrado: " . ($this->adestrado ? "Sim" : "Não") . "\n";
    }

    public function vacinar() {
        $this->vacinado = true;
    }

    public function verificarAdestramento() {
        return $this->adestrado ? "Adestrado" : "Não adestrado";
    }

    public function atualizarNivelEnergia($valor) {
        $this->nivelEnergia = $valor;
    }

    public function indicarPorte() {
        return $this->porte;
    }

    public function socializar() {
        $this->sociavel = true;
    }

    public function iniciarAdestramento() {
        $this->adestrado = true;
    }

    public function resumoCachorro() {
        echo "Nome: $this->nome, Raça: $this->raca, Porte: $this->porte\n";
    }
}
