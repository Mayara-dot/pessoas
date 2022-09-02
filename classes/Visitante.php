<?php
require_once 'Pessoa.php';
class Visitante extends Pessoa { //CLASSE FILHA  DE PESSOA /SUBCLASSE
    //construtor
    public function __construct($nome, $idade, $pronome) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPronome($pronome);
        echo "<hr><p>Seja bem vindo, {$this->getNome()}.</p>";
    }
}
?>