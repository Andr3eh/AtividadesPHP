<?php

    class Funcionarios{
        public $nome;
        protected  $salario;
        private $senha;

       public function __construct($nome, $salario, $senha){
            $this->nome = $nome;
            $this->salario - $salario;
            $this->senha = $senha;
       }
       
       public function getSalario(){
            return $this->salario;
       }

       public function setSenha($arg){
            $this->senha = $arg;
       }

       // Aplica um aumento ao salário com base no percentual fornecido.
       public function AumentoSalario($percentual){
            $this->salario += $this->salario * $percentual / 100;
       }

       public function ExibirInFormacoes(){
            echo "Nome : "  .$this->nome .PHP_EOL;
            echo "Salario : " .$this->salario .PHP_EOL;
            echo "Senha : " .$this->senha .PHP_EOL;

       }

    }
    
    $Funcionario01 = new Funcionarios('Paulo', 6500, 654987);
    $Funcionario01->AumentoSalario(10);
    $Funcionario01->ExibirInFormacoes();
    echo str_repeat("-", 40) .PHP_EOL; // Linha separadoracls
    $Funcionario02 = new Funcionarios('Julia', 7800, 321456);
    $Funcionario02->AumentoSalario(10);
    $Funcionario02->ExibirInFormacoes();
?>