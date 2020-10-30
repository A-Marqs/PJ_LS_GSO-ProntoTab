<?php 

Class Usuario{


    public function login ($user, $pass){
        global $pdo;
        global $elog;
    
        try{
            $sql = "SELECT * FROM usuarios WHERE user = :user AND pass = :pass";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("user" , $user);
            $sql->bindValue("pass" , md5($pass));
            $sql->execute();

            if($sql-> rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION['iduser'] = $dado['idusuario'];

                return true;
            }else{
                $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return false;
            }
        }catch (PDOException $elog){
            exit;
        }
    }
}

?>