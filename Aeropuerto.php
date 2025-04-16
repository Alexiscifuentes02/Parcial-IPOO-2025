<?php
    class Aeropuerto{
        private $denominacion;
        private $direccion;
        private $arrayAerolineas;

        // Metodo constructor de la clase Aeropuerto
        public function __construct($nDenominacion,$nDireccion){
            $this->denominacion = $nDenominacion;
            $this->direccion = $nDireccion;
            $this->arrayAerolineas = [];
        }


        // Metodos GET de la clase Aeropuerto
        public function getDenominacion(){
            return $this->denominacion;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function getArrayAerolineas(){
            return $this->arrayAerolineas;
        }



        // Metodos SET de la clase Prestamo
        public function setDenominacion($nDenominacion){
            $this->denominacion = $nDenominacion;
        }

        public function setDireccion($nDireccion){
            $this->direccion = $nDireccion;
        }

        public function setArrayAerolineas($colAerolineas){
            $this->arrayAerolineas = $colAerolineas;
        }


        // Metodo que muestra la informacion de la clase Aeropuerto
        public function __toString(){
            return "Denominacion: ".$this->getDenominacion()."\n". 
                   "Direccion: ".$this->getDireccion()."\n".
                   "Aerolineas: ".$this->mostrarAerolineas()."\n";
        }


        // Metodo que muestra la coleccion de Aerolineas
        public function mostrarAerolineas(){
            $cadena = "";
            $aerolineas = $this->getArrayAerolineas();
            foreach($aerolineas as $aerolinea){
                $cadena = $cadena. $aerolinea. "\n";
            }
            return $cadena;
        }

        //
        public function  retornarVuelosAerolinea($objAerolinea){
            $colAerolineas = $this->getArrayAerolineas();
            $vuelos = null;
            foreach($colAerolineas as $aerolinea){
                $unVuelo = $aerolinea->venderVueloADestino();
            }
        }


        public function ventaAutomatica($cantAsientos,$nFecha,$nDestino){
            $colAerolineas = $this->getArrayAerolineas();
            foreach($colAerolineas as $aerolinea){
                $vuelo = $aerolinea->getArrayAerolineas;
                if($vuelo->asignarAsientosDisponibles($cantAsientos)){
                    $aerolinea->incorporarVuelo($vuelo);
                }
            }
        }


        public function promedioRecaudadoXAerolinea($idAerolinea){
            $aerolineas = $this->getArrayAerolineas();
            $promedio = 0;
            $encontrado = false;
            $i = 0;
            while($i < count($aerolineas) && !$encontrado){
                if($aerolineas[$i]->getIdentificacion == $idAerolinea){
                    $promedio = $aerolineas[$i]->montoPromedioRecaudado();
                }
            }
            return $promedio;
        }

    }