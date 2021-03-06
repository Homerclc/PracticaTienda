<?php
class DB {
//atributo privado de conexión
    private static $conexion;
    /* ======================conectar()======================================
      conecta con la base de datos, usando PDO
      da valor al atributo privado y estático $conexion de la clase
      En caso de no conectarse aborta la app y muestra un mensaje
     * ***************************************************************************************** */
    private static function conectar() {
        try {
            $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $dsn = "mysql:host=localhost;dbname=dwes";
            $usuario = 'root';
            $pass = '';
            $conexion = new PDO($dsn, $usuario, $pass, $opc);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die('Abortamos la aplicación por fallo al conectar con la BD' . $ex->getMessage());
        }
        self::$conexion = $conexion;
    }
    /* ======================ejecutaConsulta ($sql,$valores)======================================
      Accion: Ejecuta una consulta preparada con los valores de los parámetros de la consulta preparada
      Parámetros: $sql es la consulta preparada y parametrizada
      $valores es un array asociativo con los valores de los distintos
      parámetros de la consulta anterior
      Retorna =La consulta despues de ejecutarla, o null si no la ha podido ejecutaqr
      en caso de no ejecutarla da un mensaje
     * ********************************************************************************************** */
    protected static function ejecutaConsulta($sql, $valores = null) {
        if (self::$conexion == null) {
            self::conectar();
        }
        $conexion = self::$conexion;
        try {
            $consulta = $conexion->prepare($sql);
            $consulta->execute($valores);
        } catch (PDOException $e) {
            echo 'No se ha podido ejecutar la consulta' . $e->getMessage();
            return null;
        }
        return $consulta;
    }
    /* ======================verificaCliente ($nombre,$pass)======================================
      Accion: verifica si un nombre y pass son contenidos en la base de datos
      Parámetros: $nombre es el nombre de usuario
      $pass es la password para ese nombre
      Retorna  true o false según se haya podido o no validar
     * Recordar que la pass está cifrada con md5 en la base de datos      
     * ********************************************************************************************** */
    public static function verificaCliente($nombre, $pass) {
        $valores = array('usuario' => $nombre, 'password' => $pass);
        $sql = <<<FIN
        SELECT nombre FROM usuarios 
        WHERE nombre=:usuario
        AND pass=md5(:password)
FIN;
        $resultado = self::ejecutaConsulta($sql, $valores);
        if ($resultado->fetch()) {
            return true;
        }
        return false;
    }
//este metodo nos devuelve un array con objetos de cada producto. 
    public static function obtieneProductos() {
        $sql = "SELECT cod, nombre_corto, nombre, PVP FROM producto;";
        $resultado = self::ejecutaConsulta($sql);
        $productos = array();
        if ($resultado) {
            // Añadimos un elemento por cada producto obtenido
            while ($row = $resultado->fetch()) {
                $productos[] = new Producto($row);
            }
        }
        return $productos; 
    }
    public static function obtieneProducto($codigo) {

        $valores = array('cod' => $codigo);
        $sql = <<<FIN
        SELECT cod, nombre_corto, nombre, PVP
        FROM producto 
        WHERE cod = :cod
FIN;
        $resultado = self::ejecutaConsulta($sql, $valores);
        $producto = null;
        if (isset($resultado)) {
            $row = $resultado->fetch();
            $producto = new Producto($row);
        }
        return $producto;
    }

}
    
    

//End de la clase DB.php
?>


