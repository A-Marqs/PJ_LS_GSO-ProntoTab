<?php
    class Conexao {
       private $userdatas = array () ;
       //variavel da classe Base
       protected $pdo = null ;

       public function __set ($user , $pass) {
          $this->data[$user] = $pass;
       }
      public function __get($user) {
        if (array_key_exists($user, $this->data)) {
          return $this->data[$user] ;
        }
        $trace = debug_backtrace () ;
        trigger_error(
           'Undefined property via __get () : ' . $user .
           ' in ' .$trace[0] ['file'] .
           ' on line ' . $trace[0] ['file']
           E_USER_NOTICE) ;
        return null ;
        //método que retorna a variavel $pdo
        public function getPdo() {
           return $this->pdo ;
        }
        //método construtor da classe
        function __construct($pdo = null)
            $this->pdo = $pdo ;
            if ($this->pdo == null)
                $this->conectar() ;
        }

        //método que conecta com o banco de dados
        public function conectar() {
            try{
                $this->pdo = new PDO("mysql:host=localhost;dbname=usuarios",
                              "root" ,
                              "Prontotab@2020" ,
                              array (PDO : :MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" )) ;
            }catch (PDOException $e) {
                print "Error! : " . $e->getMessage() , "<br/>" ;
                die() ;
            }
        }

        //método que desconecta
        public function desconectar() {
            $this->pdo = null;
        }

        public function select($sql) {
            $stmt = $this->pdo->prepare($sql) ;
            $stmt->is_execute() ;
            return $stmt->fetchAll(PDO: :FETCH_ASSOC) ;
        }
}
//conexao com o banco de dados, tabela e coluna
?>

