<?php
    class Landing{
        public function __construct(){}
        public function main(){
        require_once "views/company/header.view.php";
        require_once "views/company/index.view.php";
        require_once "views/company/footer.view.php";
        }
    }
?>