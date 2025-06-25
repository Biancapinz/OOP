<?php

require_once "animal.class.php";

class Gato extends Animal {
    private $pelagem;
    private $castrado;
    private $independente;
    private $vacinado;
    private $curioso;
    private $adoraColo;
    private $usaCaixaAreia;

    public function __construct($nome, $especie, $idade, $sexo, $peso, $cor, $pelagem,
                                $castrado = false, $independente = 5, $vacinado = false,
                                $curioso = true, $adoraColo = false, $usaCaixaAreia = false) {
        parent::__construct($nome, $especie, $idade, $sexo, $peso, $cor);
        $this->pelagem = $pelagem;
        $this->castrado = $castrado;
        $this->independente = $independente;
        $this->vacinado = $vacinado;
        $this->curioso = $curioso;
        $this->adoraColo = $adoraColo;
        $this->usaCaixaAreia = $usaCaixaAreia;
    }

    public function exibirGato() {
        $this->exibirFicha();
        echo "Pelagem: $this->pelagem\n";
        echo "Castrado: " . ($this->castrado ? "Sim" : "Não") . "\n";
        echo "Independência: $this->independente\n";
        echo "Vacinado: " . ($this->vacinado ? "Sim" : "Não") . "\n";
        echo "Curioso: " . ($this->curioso ? "Sim" : "Não") . "\n";
        echo "Adora Colo: " . ($this->adoraColo ? "Sim" : "Não") . "\n";
        echo "Usa Caixa de Areia: " . ($this->usaCaixaAreia ? "Sim" : "Não") . "\n";
    }

    public function castrar() {
        $this->castrado = true;
    }

    public function verificarPelagem() {
        return $this->pelagem;
    }

    public function atualizarIndependencia($grau) {
        $this->independente = $grau;
    }

    public function vacinar() {
        $this->vacinado = true;
    }

    public function resumoGato() {
        echo "Nome: $this->nome, Pelagem: $this->pelagem, Status: $this->status\n";
    }

    public function ensinarCaixaAreia() {
        $this->usaCaixaAreia = true;
    }

    public function verificarContato() {
        return $this->adoraColo ? "Aceita colo" : "Independente";
    }
}
