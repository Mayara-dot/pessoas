<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{//CLASSE FILHA DE ALUNO /SUBCLASSE
    
    //atributo
    private $registro;

    //construtor
    public function Tecnico($nome, $idade, $pronome, $numMatricula, $curso, $numRegisto) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPronome($pronome);
        $this->setMatricula($numMatricula, true);
        $this->setCurso($curso);
        $this->setRegistro($numRegisto);
    }

    //metodos 
    public function praticar() {
        echo "<hr><p>Bora praticar as suas habilidade tecnicas de {$this->getCurso()}.</p>";
    }

    //metodos especiais
    public function getRegistro() {
        return $this->registro;
    }
    public function setRegistro($numRegisto) {
        $this->setRegistro($numRegisto);
    }

}
?>