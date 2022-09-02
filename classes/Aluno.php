<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{ //CLASSE FILHA DE PESSOA E SUPERCLASSE DE BOLSISTA E TECNICO /SUBCLASSE
    //atributos
    private $matricula, $curso;

    //construtor 
    public function Aluno($nome, $idade, $pronome, $numMatricula, $curso) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPronome($pronome);
        $this->setMatricula($numMatricula, false);
        $this->setCurso($curso);
    }
    //metodos
    public function pagarMensalidade() {
        if($this->getMatricula()['situacao']) {
            echo "<hr><p>Olá, <strong>{$this->nome}</strong> sua mensalidade foi paga com sucesso.</p>";
        } else {
            echo "<hr><p>Olá, <strong>{$this->nome}</strong> sua mensalidade não pode ser paga, situação inativa.</p>";
        }
    }

    //metodos especiais
    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($numMatricula, $situacao) {
        $this->matricula = ['numMatricula' => $numMatricula, 'situacao' => $situacao];
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }
}
?>