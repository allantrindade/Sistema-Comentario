<?php
include_once('../Classes/classConexao.php');



    class classUsuario extends classConexao {
        

        //METODO LOGAR
        public function login($usuario, $senha){
            $h = new classPassword();
            $query = "SELECT * FROM usuarios WHERE usuario = :usuario";
            $stmt = $this->conectDB()->prepare($query);
            $stmt->bindValue("usuario", $usuario);
            $stmt->execute();          
            
            if ($stmt->rowCount() > 0) {
                $dado = $stmt->fetch();              
                session_start();
                $_SESSION['loggedin'] = $dado['usuario'];
                if ($h->verifyHash($senha ,$dado['senha'])) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            } 
        }

        //METODO LOGOUT
        public function logout() {
            session_start();
            session_destroy();
            header('Location: ../Pages/login.php');
        }
    }