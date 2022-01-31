
<?php

//Ejemplo de URL en PC clase: http://localhost/DWES-UD6/ejercicio10-11-12/index.php?controller=libros&action=listar1&id=14



//La carpeta donde buscaremos los controladores
define('CONTROLLERS_FOLDER', "controllers/");

//Si no se indica un controlador, este es el controlador que se usará
define('DEFAULT_CONTROLLER', "pokemon");

//Si no se indica una acción, esta acción es la q usará
define('DEFAULT_ACTION', "obtenerTodos");

//Obtenemos el controlador
//Si el usuario no introduce, seleccionamos por defecto

$controller = DEFAULT_CONTROLLER;
if (!empty($_GET['controller']));
    $controller = $_GET['controller'];

$action = DEFAULT_ACTION;
// Obtenemos la acción seleccionada
// Si usuario no introduce, selecciona x defecto
if (!empty($_GET['action']))
    $action = $_GET['action'];

//Ya tenemos el controlador y acción
//Formamos nombre fichero q contiene nuestro controlador
$controller = CONTROLLERS_FOLDER . $controller . '_controller.php';

// Si la variable $controller es un fichero lo requerimos:
try {
    if (is_file($controller))
        require_once($controller);
    else
        throw new Exception('El controlador no existe - 404 not found (1)');

    if (is_callable($action))
        $action();
    else
        throw new Exception('La acción no existe - 404 not found (2)');
} catch (Exception $e) {
    echo "Error exc. capturado: " . $e->getMessage() . "\n";
}
?>

