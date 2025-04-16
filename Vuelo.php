<?php
    class Vuelo{
        private $numero;
        private $importe;
        private $fecha;
        private $destino;
        private $horaArribo;
        private $horaPartida;
        private $cantidadAsientosTotales;
        private $asientosDisponibles;
        private $objetoPersona;

        // Metodo constructor de la clase Vuelo
        public function __construct($nNumero,$nImporte,$nDestino,$hArribo,$hPartida,$totalAsientos,$nDisponibles,$objPersona){
            $this->numero = $nNumero;
            $this->importe = $nImporte;
            $this->fecha = date("d/m/Y");
            $this->destino = $nDestino;
            $this->horaArribo = $hArribo;
            $this->horaPartida = $hPartida;
            $this->cantidadAsientosTotales = $totalAsientos;
            $this->asientosDisponibles = $nDisponibles;
            $this->objetoPersona = $objPersona;
        }


        // Metodos GET de la clase Vuelo
        public function getNumero(){
            return $this->numero;
        }

        public function getImporte(){
            return $this->importe;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function getDestino(){
            return $this->destino;
        }

        public function getHoraArribo(){
            return $this->horaArribo;
        }

        public function getHoraPartida(){
            return $this->horaPartida;
        }

        public function getAsientosTotales(){
            return $this->cantidadAsientosTotales;
        }

        public function getAsientosDisponibles(){
            return $this->asientosDisponibles;
        }

        public function getObjetoPersona(){
            return $this->objetoPersona;
        }


        // Metodos SET de la clase Vuelo
        public function setNumero($nNumero){
            $this->numero = $nNumero;
        }

        public function setImporte($nImporte){
            $this->importe = $nImporte;
        }

        public function setFecha($nFecha){
            $this->fecha = $nFecha;
        }

        public function setDestino($nDestino){
            $this->destino = $nDestino;
        }

        public function setHoraArribo($hArribo){
            $this->horaArribo = $hArribo;
        }

        public function setHoraPartida($hPartida){
            $this->horaPartida = $hPartida;
        }

        public function setAsientosTotales($totalAsientos){
            $this->cantidadAsientosTotales = $totalAsientos;
        }

        public function setAsientosDisponibles($nDisponibles){
            $this->asientosDisponibles = $nDisponibles;
        }

        public function setObjetoPersona($objPersona){
            $this->objetoPersona = $objPersona;
        }


        // 
        public function asignarAsientosDisponibles($cantPasajeros){
            $respuesta = false;
            $asientosDisponibles = $this->getAsientosDisponibles();
            if($cantPasajeros <= $asientosDisponibles){
                $respuesta = true;
                $this->setAsientosDisponibles($asientosDisponibles - $cantPasajeros);
            }
            return $respuesta;
        }

        
    }