<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{ //CLASSE FILHA DE PESSOA /SUBCLASSE
    //atributo
    private $especialidade, $salario;

    //construtor 
    public function Professor($nome, $idade, $pronome, $especialidade, $salario) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPronome($pronome);
        $this->setEspecialidade($especialidade);
        $this->setSalario($salario);
    }
    //metodos
    public function receberAumento($valorAum) {
        $this->setSalario($this->getSalario() + $valorAum);
        echo "<hr><p>O valor atual do seu salário é R$" . $this->getSalario() . " reais.</p>";
    }

    //metodos especiais
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
}
?>