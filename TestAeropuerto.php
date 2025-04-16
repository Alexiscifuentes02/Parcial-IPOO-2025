<?php
    include_once 'Persona.php';
    include_once 'Aerolineas.php';
    include_once 'Vuelo.php';
    include_once 'Aeropuerto.php';

    $objetoAerolinea1 = new Aerolineas(1111,"Puerto Madero",$objetoVuelo1);
    $objetoAerolinea2 = new Aerolineas(2222,"Alas",$objetoVuelo3);

    

    $horaArribo["Hora"] = 8;
    $minutosArribo["Minutos"] = 0;
    $horaPartida["Hora"] = 18;
    $minutosPartida["Minutos"] = 0;
    
    $objetoPersona = new Persona("Lionel","Messi","Guatemala 60","maowmfigowf.com",945029450);

    $objetoVuelo1 = new Vuelo(32,40000,"hawaii",$horaArribo,$horaPartida,100,20,$objetoPersona);
    $objetoVuelo2 = new Vuelo(42,80000,"hawaii",$horaArribo,$horaPartida,150,10,$objetoPersona);
    $objetoVuelo3 = new Vuelo(20,60000,"mexico",$horaArribo,$horaPartida,90,30,$objetoPersona);
    $objetoVuelo4 = new Vuelo(12,45000,"bahia",$horaArribo,$horaPartida,160,35,$objetoPersona);


   $objetoAeropuerto = new Aeropuerto("los","Alkfrea 984",[$objetoAerolinea1,$objetoAerolinea2]);

    $resultado = $objetoAeropuerto->ventaAutomatica(3,date("d/m/Y"),"miami");
    echo $resultado;

    $resultado2 = $objetoAeropuerto->promedioRecaudadoXAerolinea(1111);
    echo $resultado2;

 
