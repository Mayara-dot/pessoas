<?php
require_once 'Aluno.php';
final class Bolsista extends Aluno{ // CLASSE FILHA DE ALUNO /SUBLCASSE
    //atributos
    private $bolsa;

    //construtor
    public function __construct($nome, $idade, $pronome, $curso,$numMatricula, $valorBolsa) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPronome($pronome);
        $this->setCurso($curso);
        $this->setMatricula($numMatricula, true);
        $this->setBolsa($valorBolsa);
    }

    //metodos
    public function renovarBolsa() {
        if($this->getMatricula()['situacao']) {
            echo "<hr><p>Olá, <strong>{$this->getNome()}</strong> sua bolsa foi renovada com sucesso.</p>";
        } else {
            echo "<hr><p>Olá, <strong>{$this->getNome()}</strong> sua bolsa não pode ser renovada, situação inativa.</p>";
        }
    }

    //override
    public function pagarMensalidade() {
        if($this->getMatricula()['situacao']) {
            echo "<hr><p><strong>{$this->nome}</strong> é bolsista! Então paga com desconto.</p>";
        } else {
            echo "<hr><p><strong>{$this->getNome()} </strong> é bolsista, porém sua matrícula está irregular, não 
            foi possível pagar a mensalidade.</p>";
        }
    }



    //metodos especiais
    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($valorBolsa) {
        $this->bolsa = $valorBolsa;
    }
}
?>