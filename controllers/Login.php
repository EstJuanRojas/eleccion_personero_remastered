<?php
    require_once "models/Credential.php";
    class Login{
        public function __construct(){}
        public function main(){
            require_once "views/company/header.view.php";
            require_once "views/company/index.view.php";
            require_once "views/company/footer.view.php";
        }
        public function login(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/company/header.view.php";
                require_once "views/company/login.view.php";
                require_once "views/company/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {                
                $userObj = new Credential(
                    $_POST['user'],
                    $_POST['pass']
                );
                if ($userObj->getUserEmail() == "pepito@perez.com" AND $userObj->getCredentialPass() == "12345") {
                    header("Location: ?c=Dashboard");
                } else {
                    header("Location: ?c=Dashboard");                    
                }
            }
        }
    }
?>