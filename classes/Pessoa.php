<?php
abstract class Pessoa { //CLASSE MÃE / SUPERCLASSE
    //atributos
    protected $nome, $idade, $pronome;

    //metodos
    public final function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
        echo "<hr><p>Feliz Aniversário!! Sua idade atual é de {$this->getIdade()} anos.</p>";
    }

    //metodos especiais
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getPronome() {
        return $this->pronome;
    }
    public function setPronome($pronome) {
        $this->pronome = $pronome;
    }


}
?>