<?php
    require_once "models/User.php";
    class Credential extends User{
        protected $credentialPhoto;
        protected $credentialId;
        protected $credentialStartDate;
        protected $credentialPass;
        protected $credentialStatus;
        public function __construct(){
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        }
        public function __construct2($userEmail, $credentialPass){
            $this->userEmail = $userEmail;
            $this->credentialPass = $credentialPass;
        }
        # Foto de la Credencial
        public function setCredentialPhoto($credentialPhoto){
            $this->credentialPhoto = $credentialPhoto;
        }
        public function getCredentialPhoto(){
            return $this->credentialPhoto;
        }
        # Identificación de la Credencial
        public function setCredentialId($credentialId){
            $this->credentialId = $credentialId;
        }
        public function getCredentialId(){
            return $this->credentialId;
        }        
        # Fecha de Ingreso de la Credencial
        public function setCredentialStartDate($credentialStartDate){
            $this->credentialStartDate = $credentialStartDate;
        }
        public function getCredentialStartDate(){
            return $this->credentialStartDate;
        }
        # Contraseña de la Credencial
        public function setCredentialPass($credentialPass){
            $this->credentialPass = $credentialPass;
        }
        public function getCredentialPass(){
            return $this->credentialPass;
        }
        # Foto de la Credencial
        public function setCredentialStatus($credentialStatus){
            $this->credentialStatus = $credentialStatus;
        }
        public function getCredentialStatus(){
            return $this->credentialStatus;
        }
    }
?>