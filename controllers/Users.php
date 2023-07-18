<?php
require_once "models/Credential.php";
    class Users{
        public function __construct(){}
        public function main(){
            header("Location:?c=Dashboard");
        }
        public function createRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/1_Users/create_rol.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rol = new User(
                    null,
                    $_POST['rolName']
                );
                $rol->createRol();
                require_once "views/roles/admin/header.view.php";
                echo "¡el rol ha sido creado con éxito!";
                require_once "views/roles/admin/footer.view.php";
            }
        }
    }
?>