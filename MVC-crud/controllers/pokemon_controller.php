<?php 


function mostrarTodos () {
    require 'models/pokemon_models.php';
    $pokemonito = obtenerTodos();
    include 'view/pokemon_list.php';
}

function mostrarIndividual()
{
    require_once './models/pokemon_models.php';
    $pokemonito = obtenerElemento($_GET['id']);
    include_once './views/pokemon_list.php';
}

function insertarIndividual () 
{
    require './models/pokemon_models.php';
    $pokemonito = insertaElemento($nombre, $tipo1, $tipo2, $numero_lista, $generacion, $fecha_creacion, $imagen);

}



?>

