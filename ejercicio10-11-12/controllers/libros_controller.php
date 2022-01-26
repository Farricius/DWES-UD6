<?php 

function listar () 
{
    // Incluyamos el modelo
    require 'models/libros_model.php';
    // En $libros tenemos array con todos libros gracias a modelo
    $libros = getLibros();
    // La vista recibe un array para pantalla
    include 'views/libros_listar.php';
}

function listar1(){
    require "./models/libros_model.php";
    
    $libros = getLibro($_GET['id']);
    
    include "./views/libros_listar.php";
    
    }
?>