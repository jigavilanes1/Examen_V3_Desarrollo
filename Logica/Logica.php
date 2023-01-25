<?php
    require_once("../Model/UsuariosModel.php");
    require_once("../Model/VehiculoModel.php");
    $data = json_decode(file_get_contents("php://input"));

    switch ($data->operacion) {
        case "Guardar":
            $vehiculo = new Vehiculo();
            $vehiculo->setId($data->id);
            $vehiculo->setPlaca($data->placa);
            $vehiculo->setMarca($data->marca);
            $vehiculo->setMotor($data->motor);
            $vehiculo->setChasis($data->chasis);
            $vehiculo->setCombustible($data->combustible);
            $vehiculo->setAnio($data->anio);
            $vehiculo->setColor($data->color);
            $vehiculo->setAvaluo($data->avaluo);
            if($vehiculo->getId() == "") {
                $vehiculo->Insertar();
                echo "Guardado";
            } else {
                $vehiculo->Actualizar();
                echo "Actualizado";
            }
            break;

            
        case "BuscarTodos":
            $vehiculo = new Vehiculo();
            $resultado = $vehiculo->BuscarTodos();
            foreach($resultado as $fila) {                
                echo "<tr align='center'><td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td>
                <td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td>
                <td><button class='btn btn-dark' onclick='Eliminar($fila[0]);'>Eliminar</button></td></tr>";
            }
            break;


        case "Eliminar":
            $vehiculo = new Vehiculo();
            $vehiculo->setId($data->id);
            $vehiculo->eliminar();
            echo "Eliminado";
            break;   
        
        case "GuardarUsuario":
            $Usuario = new Usuario();
            $Usuario-> setPassword(hash("sha256",md5($data->password)));
            $Usuario->setUsuario($data->usuario);
            $Usuario->Guardar();
    }
    

?>