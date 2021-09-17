<?php

    class Aluno {

        protected $nome, $ra, $nota1, $nota2, $nota3, $nota4;

        function __construct($nome, $ra, $nota1, $nota2, $nota3, $nota4) {
            $this->setNome($nome);
            $this->setRa($ra);
            $this->setNota1($nota1);
            $this->setNota2($nota2);
            $this->setNota3($nota3);
            $this->setNota4($nota4);
        }

        // metodo setters

        private function setNome($nome):bool {
            if(is_string($nome)) {
                $this->nome = $nome;
                return true;
            } else {    
                return false;
            }
        }

        private function setRa($ra):bool {
            if(is_int($ra)) {
                $this->ra = $ra;
                return true;
            } else {
                return false;
            }
        }

        private function setNota1($nota1):bool {
            if(is_float($nota1)) {
                $this->nota1 = $nota1;
                return true;
            } else {
                return false;
            }
        }

        private function setNota2($nota2):bool {
            if(is_float($nota2)) {
                $this->nota2 = $nota2;
                return true;
            } else {
                return false;
            }
        }

        private function setNota3($nota3):bool {
            if(is_float($nota3)) {
                $this->nota3 = $nota3;
                return true;
            } else {
                return false;
            }
        }

        private function setNota4($nota4):bool {
            if(is_float($nota4)) {
                $this->nota4 = $nota4;
                return true;
            } else {
                return false;
            }
        }

        // metodo getters

        public function getNome() {
            return $this->nome;
        }

        public function getRa() {
            return $this->ra;
        }

        public function getNota1() {
            return $this->nota1;
        }

        public function getNota2() {
            return $this->nota2;
        }

        public function getNota3() {
            return $this->nota3;
        }

        public function getNota4() {
            return $this->nota4;
        }

        // metodo exibirAlunos

        public function exibirAluno() {
            $aluno = ["nome"=>$this->nome,
                        "ra"=>$this->ra,
                        "nota1"=>$this->nota1,
                        "nota2"=>$this->nota2,
                        "nota3"=>$this->nota3,
                        "nota4"=>$this->nota4
                    ];
            return $aluno;
        }

        // metodo para calcular a media do aluno
        
        public function getMedia():float {
            $mediaAluno = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4)/4;
            return $mediaAluno;
        }    
    }
?>