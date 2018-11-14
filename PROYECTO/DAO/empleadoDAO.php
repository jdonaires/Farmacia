<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/empleado.php');
require_once('../BOL/persona.php');

class EmpleadoDAO
{
    private $pdo;

    public function __CONSTRUCT()
    {
        $dba = new DBAccess();
        $this->pdo = $dba->get_connection();
    }

    public function insertarEmpleado(empleado $empleado, persona $persona)
    {
        try {
            $statement = $this->pdo->prepare("call insertar_persona_empleado(?,?,?,?,?,?,?,?,?,?,?,?,?)");

            $statement->bindValue(1, $persona->__GET('dni'));
            $statement->bindValue(2,  $persona->__GET('nombre'));
            $statement->bindValue(3,  $persona->__GET('apellido'));
            $statement->bindValue(4,  $persona->__GET('correo'));
            $statement->bindValue(5,  $persona->__GET('fecnac'));
            $statement->bindValue(6,  $persona->__GET('genero'));
            $statement->bindValue(7,  $persona->__GET('direccion'));
            $statement->bindValue(8,  $persona->__GET('tipopersona'));

            $statement->bindValue(9, $empleado->__GET('turno'));
            $statement->bindValue(10, $empleado->__GET('especialidad'));
            $statement->bindValue(11, $empleado->__GET('usuario'));
            $statement->bindValue(12, $empleado->__GET('clave'));
            $statement->bindValue(13, $empleado->__GET('dni'));


            $statement->execute();
            $count = $statement->rowCount();

            return $count;

        } catch (Exception $e) {
            die("insertarEmpleado function  ->" . $e->getMessage());
        }
    }

    public function actualizarEmpleado(empleado $empleado)
    {
        try {
            $statement = $this->pdo->prepare("CALL up_actualizar_empleado(?,?,?,?,?,?)");

            $statement->bindValue(1, $empleado->__GET('idEmpleado'));
            $statement->bindValue(2, $empleado->__GET('Turno'));
            $statement->bindValue(3, $empleado->__GET('especialidad'));
            $statement->bindValue(4, $empleado->__GET('usuario'));
            $statement->bindValue(5, $empleado->__GET('clave'));
            $statement->bindValue(6, $empleado->__GET('dni'));

            $statement->execute();
            $count = $statement->rowCount();

            return $count;

        } catch (Exception $e) {
            die("actualizarEmpleado function  ->" . $e->getMessage());
        }
    }


    public function listarEmpleado(empleado $empleado)
    {
        try {

            $statement = $this->pdo->prepare("call up_listar_empleado(?)");

            $statement->bindValue(1, $empleado->__GET('dni'));
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_CLASS, "Empleado");

            return $result;

        } catch (Exception $e) {
            die("listarEmpleado function  ->" . $e->getMessage());
        }
    }

    public function eliminarEmpleado($dni)
    {

        try {

            $statement = $this->pdo->prepare("call up_eliminar_empleado(?)");

            $statement->bindParam(1, $dni);
            $statement->execute();
            $count = $statement->rowCount();

            return $count;

        } catch (Exception $e) {
            die("eliminarEmpleado function  ->" . $e->getMessage());
        }
    }

    public function verificarUsuarioContraseña($usuario,$contraseña){
        try {

            $statement = $this->pdo->prepare("select verificar_usuario_clave(?,?)");

            $statement->bindParam(1, $usuario);
            $statement->bindParam(2, $contraseña);
            $statement->execute();

            $result = $statement->fetch();

            return $result[0]==1;

        } catch (Exception $e) {
            die("verificarUsuarioContraseña function  ->" . $e->getMessage());
        }
    }

}

?>
