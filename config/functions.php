<?php

    /**
     * Para ir creando las diferentes funciones
     */

    function conectar($host, $usuario, $contrasena, $base_datos) {
        $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);
    
        if ($conexion->connect_error) {
            throw new Exception('Error de conexión a la base de datos: ' . $conexion->connect_error);
        }
    
        return $conexion;
    }
    
    function cerrarConexion($conexion) {
        if ($conexion) {
            $conexion->close();
        }
    }
    
    function tablaAgendaExiste($conexion) {
        $resultado = $conexion->query("SHOW TABLES LIKE 'agenda'");
        return $resultado->num_rows > 0;
    }
    
    function crearTablaAgenda($conexion) {
        try {
            if (tablaAgendaExiste($conexion)) {
                throw new Exception('La tabla agenda ya existe.');
            }
    
            $consulta_creacion = "CREATE TABLE agenda (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    Nombre VARCHAR(255) NOT NULL,
                                    Telefono VARCHAR(20),
                                    email VARCHAR(255)
                                )";
    
            if ($conexion->query($consulta_creacion) === TRUE) {
                return array('success' => true, 'message' => 'La tabla agenda ha sido creada exitosamente.');
            } else {
                throw new Exception('Error al crear la tabla agenda: ' . $conexion->error);
            }
        } catch (Exception $e) {
            return array('success' => false, 'message' => $e->getMessage());
        }
    }
    
    function darFormatoMensaje($resultado) {
        if ($resultado['success']) {
            return '<div class="alert alert-success">' . $resultado['message'] . '</div>';
        } else {
            return '<div class="alert alert-danger">' . $resultado['message'] . '</div>';
        }
    }


    // Para sacar los datos que ya llevemos en la agenda
    function obtenerDatosAgenda($conexion) {
        $resultados = array();
    
        $consulta = "SELECT * FROM agenda";
        $resultado = $conexion->query($consulta);
    
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $resultados[] = $fila;
            }
        }
    
        return $resultados;
    }

    // Para insertar un nuevo contacto en la tabla agenda
    function insertarContacto($conexion, $nombre, $telefono, $email) {
        $nombre = $conexion->real_escape_string($nombre);
        $telefono = $conexion->real_escape_string($telefono);
        $email = $conexion->real_escape_string($email);

        $consulta = "INSERT INTO agenda (Nombre, Telefono, email) VALUES ('$nombre', '$telefono', '$email')";

        if ($conexion->query($consulta) === TRUE) {
            return array('success' => true, 'message' => 'Contacto insertado correctamente.');
        } else {
            return array('success' => false, 'message' => 'Error al insertar el contacto: ' . $conexion->error);
        }
    }

    // Para obtener los datos de un contacto específico
    function obtenerContactoPorID($conexion, $id) {
        $id = $conexion->real_escape_string($id);

        $consulta = "SELECT * FROM agenda WHERE id = '$id'";
        $resultado = $conexion->query($consulta);

        if ($resultado->num_rows == 1) {
            return $resultado->fetch_assoc();
        } else {
            return null;
        }
    }

    // Para actualizar un contacto en la tabla agenda
    function actualizarContacto($conexion, $id, $nombre, $telefono, $email) {
        $id = $conexion->real_escape_string($id);
        $nombre = $conexion->real_escape_string($nombre);
        $telefono = $conexion->real_escape_string($telefono);
        $email = $conexion->real_escape_string($email);

        $consulta = "UPDATE agenda SET Nombre = '$nombre', Telefono = '$telefono', email = '$email' WHERE id = '$id'";

        if ($conexion->query($consulta) === TRUE) {
            return array('success' => true, 'message' => 'Contacto actualizado correctamente.');
        } else {
            return array('success' => false, 'message' => 'Error al actualizar el contacto: ' . $conexion->error);
        }
    }

    // Para borrar un contacto en la tabla agenda
    function borrarContacto($conexion, $id) {
        $id = $conexion->real_escape_string($id);

        $consulta = "DELETE FROM agenda WHERE id = '$id'";

        if ($conexion->query($consulta) === TRUE) {
            return array('success' => true, 'message' => 'Contacto borrado correctamente.');
        } else {
            return array('success' => false, 'message' => 'Error al borrar el contacto: ' . $conexion->error);
        }
    }