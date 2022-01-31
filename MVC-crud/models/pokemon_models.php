<?php

    $servidor = "localhost";
    $baseDatos = "bdpokemon";
    $usuario = "developer";
    $pass = "developer";

    function obtenerElemento($id)
    {
        try {
            $conexion = new PDO("mysql:host=" . $GLOBALS["servidor"] . ";dbname=" . $GLOBALS["baseDatos"], $GLOBALS["usuario"], $GLOBALS["pass"]);
            $sql = "SELECT * FROM pokemon WHERE id = ?";
            $sql = $conexion->prepare($sql);
            $sql->bindParam(1, $id);
            $sql->execute();
            $elementos = $sql->fetch(PDO::FETCH_ASSOC);
            return $elementos;
        } catch (PDOException $e) {
            echo "Conexión fallida: " . $e->getMessage();
        }
        $conexion = null;
    }

    function eliminarElemento($id)
    {
        try {
            $conexion = new PDO("mysql:host=" . $GLOBALS["servidor"] . ";dbname=" . $GLOBALS["baseDatos"], $GLOBALS["usuario"], $GLOBALS["pass"]);
            $sql = $conexion->prepare("DELETE FROM pokemon WHERE id=?");
            $sql->bindParam(1, $id);
            return $sql->execute();
        } catch (PDOException $e) {
            echo "Conexión fallida: " . $e->getMessage();
            return false;
        }
        $conexion = null;
    }

    function editarElemento($id, $nombre, $tipo1, $tipo2, $numero_lista, $generacion, $fecha_creacion, $imagen)
    {
        try {
            $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["usuario"], $GLOBALS["pass"]);

            $sql = $conexion->prepare('UPDATE pokemon SET nombre = :nombre, tipo1=:tipo1, tipo2=:tipo2,
            numero_lista=:numero_lista,generacion=:generacion, fecha_creacion=:fecha_creacion, imagen=:imagen WHERE id=:id');

            $parametrosdelafuncion = array(
                ":id" => $id, ":nombre" => $nombre, ":tipo1" => $tipo1, ":tipo2" => $tipo2, ":numero_lista" => $numero_lista,
                ":generacion" => $generacion, ":fecha_creacion" => $fecha_creacion, ":imagen" => $imagen
            );
            echo "ejecuted edit";
            return $sql->execute($parametrosdelafuncion);
        } catch (PDOException $e) {
            echo "Conexión fallida: " . $e->getMessage();
            return false;
        }
        $conexion = null;
    }

    function obtenerTodos()
    {
        try {
            $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["usuario"], $GLOBALS["pass"]);
            echo "Conectado correctamente";
            $consulta = $conexion->prepare("SELECT id, nombre, tipo1, numero_lista, fecha_creacion FROM pokemon");
            $consulta->execute();

            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $filas[] = $fila;
            }

            return $filas;
        } catch (PDOException $e) {
            echo "Conexión fallada: " . $e->getMessage();
            return false;
        }
    }


    function insertaElemento($nombre, $tipo1, $tipo2, $numero_lista, $generacion, $fecha_creacion, $imagen) // recibe todos los datos para elemento nuevo a BD.
    // Y devuelve su id nueva
    {
        try {
            $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["usuario"], $GLOBALS["pass"]);
            echo "Conectado correctamente";

            $consulta = $conexion->prepare("INSERT INTO pokemon (nombre, tipo1, tipo2, numero_lista, generacion, fecha_creacion, imagen) VALUES (?,?,?,?,?,?,?)");

            $consulta->bindParam(1, $nombre);
            $consulta->bindParam(2, $tipo1);
            $consulta->bindParam(3, $tipo2);
            $consulta->bindParam(4, $numero_lista);
            $consulta->bindParam(5, $generacion);
            $consulta->bindParam(6, $fecha_creacion);
            $consulta->bindParam(7, $imagen);
            $consulta->execute();
            echo "Rellenado!";
            return $conexion->lastInsertId();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return false;
        }
    }
    ?>