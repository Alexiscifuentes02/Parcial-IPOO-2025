<?php
    class Aerolineas{
        private $identificacion;
        private $nombre;
        private $arrayVuelosProgramados;

        // Metodo constructor de la clase Aerolineas
        public function __construct($nIdentificacion,$nNombre){
            $this->identificacion = $nIdentificacion;
            $this->nombre = $nNombre;
            $this->arrayVuelosProgramados = [];
        }


        // Metodos GET de la clase Aerolineas
        public function getIdentificacion(){
            return $this->identificacion;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getArrayVuelos(){
            return $this->arrayVuelosProgramados;
        }


        // Metodos SET de la clase Aerolineas
        public function setIdentificacion($nIdentificacion){
            $this->identificacion = $nIdentificacion;
        }

        public function setNombre($nNombre){
            $this->nombre = $nNombre;
        }

        public function setArrayVuelos($colVuelos){
            $this->arrayVuelosProgramados = $colVuelos;
        }


        // Metodo que muestra la informacion de la clase Aerolineas
        public function __toString(){
            return "Identificacion: ".$this->getIdentificacion()."\n". 
                   "Nombre: ".$this->getNombre()."\n".
                   "Vuelos: ".$this->mostrarVuelos()."\n";
        }


        // Metodo que muestra la coleccion de X
        public function mostrarVuelos(){
            $cadena = "";
            $vuelos = $this->getArrayVuelos();
            foreach($vuelos as $vuelo){
                $cadena = $cadena. $vuelo. "\n";
            }
            return $cadena;
        }


        //
        public function darVueloADestino($destino,$cantAsientos){
            $colVuelos = array();
            $coleccionVuelos = $this->getArrayVuelos();
            foreach($coleccionVuelos as $unVuelo){
                $elDestino = $unVuelo->getDestino();
                $disponibles = $unVuelo->asignarAsientosDisponibles($cantAsientos);
                if($elDestino == $destino && $disponibles){
                    array_push($colVuelos,$unVuelo);
                    $this->setArrayVuelos($colVuelos);
                }
            }
        }

        //
        public function incorporarVuelo($vuelo){
            $colVuelos = $this->getArrayVuelos();
            $encontrado = false;
            $i = 0;
            while($i < count($colVuelos) && !$encontrado){
                $destino = $colVuelos[$i]->getDestino();
                $fecha = $colVuelos[$i]->getFecha();
                $horaPartida = $colVuelos[$i]->getHoraPartida();
                if($vuelo->getDestino() == $destino && $vuelo->getFecha() == $fecha && $vuelo->getHoraPartida() == $horaPartida){
                    $encontrado = true;
                }else{
                    array_push($colVuelos,$vuelo);
                    $this->setArrayVuelos($colVuelos);
                }
                $i++;
            }

            if($encontrado){
                $incorporacionValida = false;
            }else{
                $incorporacionValida = true;
            }
            return $incorporacionValida;
        }

        
        //
        public function venderVueloADestino($nCantAsientos,$nDestino,$nFecha){
            $colVuelos = $this->getArrayVuelos();
            $encontrado = false;
            $i = 0;
            $vueloAsignado = null;
            while($i < count($colVuelos) && !$encontrado){
                $destino = $colVuelos[$i]->getDestino();
                $fecha = $colVuelos[$i]->getFecha();
                $asientosDisponibles = $colVuelos[$i]->asignarAsientosDisponibles($nCantAsientos);
                if($destino == $nDestino && $nFecha == $fecha && $asientosDisponibles){
                    $vueloAsignado = $colVuelos[$i];
                    $encontrado = true;
                }
                $i++;
            }
            return $vueloAsignado;
        }



        public function montoPromedioRecaudado(){
            $promedio = 0;
            $colVuelos = $this->getArrayVuelos();
            $cantVuelos = count($colVuelos);
            if($cantVuelos > 0){
                foreach($colVuelos as $vuelo){
                    $importe = $vuelo->getImporte();
                    $asientosVendidos = $vuelo->getAsientosTotales() - $vuelo->getAsientosDisponibles();
                    $vueloRecaudado = $importe * $asientosVendidos;
                }
                $promedio = $vueloRecaudado / $cantVuelos;
            }
            return $promedio;
        }
    }