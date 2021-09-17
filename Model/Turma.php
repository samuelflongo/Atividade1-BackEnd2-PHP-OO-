<?php

    class Turma {

        public $nomeTurma;
        protected $alunos;

        function __construct($nomeTurma) {
            $this->nomeTurma = $nomeTurma;
            $this->alunos = array();
        }

        public function exibirTurma(){
            $nome = $this->nomeTurma;
            return $nome;
        }

        // adicionar no maximo 5 alunos

        public function matriculaAluno($aluno) {
            if(count($this->alunos) < 5){
                $this->alunos[] = $aluno;
                echo "<br><strong>" . $aluno['nome'] . "</strong> foi matriculado(a) na turma " .  $this->nomeTurma;
                return true;
            } else {    
                echo "<br>Desculpe! Turma Lotada.<br>";
                return false;
            }
        }
       
        public function mediaTurma($notaAluno1,$notaAluno2,$notaAluno3,$notaAluno4,$notaAluno5):float {
            $mediaTurma = ($notaAluno1+$notaAluno2+$notaAluno3+$notaAluno4+$notaAluno5)/count($this->alunos);
            return $mediaTurma;
        }
    }
?>