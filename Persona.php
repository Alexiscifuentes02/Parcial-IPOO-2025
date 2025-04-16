<?php
    class Persona{
        private $nombre;
        private $apellido;
        private $direccion;
        private $mail;
        private $telefono;

        // Metodo constructor de la clase Persona
        public function __construct($pNombre,$pApellido,$pDireccion,$pMail,$pTelefono){
            $this->nombre = $$pNombre;
            $this->apellido = $pApellido;
            $this->direccion = $pDireccion;
            $this->mail = $pMail;
            $this->telefono = $pTelefono;
        }


        // Metodos GET de la clase Prestamo
        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function getMail(){
            return $this->mail;
        }

        public function getTelefono(){
            return $this->telefono;
        }


        // Metodo que muestra la informacion de la clase Prestamo
        public function __toString(){
            return "NOMBRE: ".$this->getNombre()."\n". 
                   "APELLIDO: ".$this->getApellido()."\n".
                   "DIRECCION: ".$this->getDireccion()."\n". 
                   "MAIL: ".$this->getMail()."\n". 
                   "TELEFONO: ".$this->getTelefono()."\n";
        }


        




    }