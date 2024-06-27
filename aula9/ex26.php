<?php 
    class Usuario{

        //Atributos da classe
        public   $nome;

        protected $cpf;

        private $endereco;
        
        //construtor de classe
        function Usuario(){
            $this->preparaUsuario();
        }

        //Métodos
        private function preparaUsuario(){
            $this->nome = "leonardo";
            $this->cpf = "999999999";
            $this->endereco = "Rua fulano de tal, numero 18";
        }

        public function getcpf(){
            return $this->cpf;
        }

        public function getnome(){
            return $this->nome;
        }

        public function getendereco(){
            return $this->endereco;
        }

    }
    //Instanciando o objeto e acessando seus respectivos metodos
    $usu = new Usuario();

    $usu ->getcpf();

    $usu -> getnome();
?>