<!DOCTYPE html>
<?php
$logica = false;
$vacia;
$respuesta = (isset($logica))? 'esta seteado': 'no esta seteado'; // empty() isset()
echo "Logico ".$respuesta."<br/>";
$respuesta = (isset($vacia))? 'esta seteado': 'no esta seteado';
echo "Vacia ".$respuesta."<br/>";
$respuesta = (empty($logica))? 'esta vacio':'no esta vacio';
echo "Logico ".$respuesta."<br/>";
$respuesta = (empty($vacia))? 'esta vacio':'no esta vacio';
echo "Vacia ".$respuesta."<br/>";

?>
<?php
if(!$_POST){
    HEADER('Location: error.php');
}
$data_array = [];
$_error = '';
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre']?? null;
    if(!empty($nombre)){
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        $nombre = (preg_match("/[0-9]/",$nombre))? false: $nombre; // empty() isset()
        if(!$nombre){
            $_error .= '.Error en el nombre ';
        }
    }else{
        $_error .= '.Nombre vacio ';
    };

    $apellido = $_POST['apellido']?? null;
    if(!empty($apellido)){
        $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
        $apellido = (preg_match("/[0-9]/",$apellido))? false: $apellido; // empty() isset()
        if(!$apellido){
            $_error .= '.Error en el apellido ';
        }
    }else{
        $_error .= '.Apellido vacio ';
    };

    $email = $_POST['email']?? null;
    if(!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(!$email){
            $_error .= '.Error en el email ';
        }
    }else{
        $_error .= '.Email vacio ';
    };

    $telefono = $_POST['telefono']?? null;
    if(!empty($telefono)){
        $telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
        $telefono = filter_var($telefono, FILTER_VALIDATE_INT);
        $telefono = (strlen($telefono)!=10)? false: $telefono; // empty() isset()
        if(!$telefono){
            $_error .= '.Error en el telefono';
        }
    }else{
        $_error .= '.Error';
    };

    $fecha = $_POST['fecha']?? null;
    if(!empty($fecha)){
        $fecha = filter_var($fecha, FILTER_SANITIZE_STRING);
        $fecha = (preg_match("/[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]/",$fecha))? $fecha: false; // empty() isset()
        if(!$fecha){
            $_error .= '.Error en el fecha ';
        }
    }else{
        $_error .= '.Fecha vacia ';
    };

    $edad = $_POST['edad']?? null;
    if(!empty($edad)){
        $edad = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
        $edad = filter_var($edad, FILTER_VALIDATE_INT);
        if(!$edad){
            $_error .= '.Error en el edad';
        }
    }else{
        $_error .= '.Edad vacio';
    };

    $educacion = $_POST['educacion']?? null;
    if(!empty($educacion)){
        $educacion = filter_var($educacion, FILTER_SANITIZE_STRING);
    }else{
        $_error .= '.Educacion vacio';
    };

    $data_array = compact('nombre', 'apellido', 'telefono', 'email', 'fecha', 'edad', 'educacion');
};
?>
<?php
function connect(){
    $connection = new mysqli('localhost','root',"",'db_persona');
    if($connection->connect_errno){
        HEADER('Location: error.php');
    }else{
        mysqli_query($connection, "SET NAMES 'utf8'");
    //    $connection -> set_charset("utf8");
    }
    return $connection;
}
$connect1 = connect();
/* $query->num_rows; var_dump($query->fetch_assoc()['']); ->affected_rows; */
$sqlInsert = "INSERT INTO tableA(nombre, apellido, telefono, email, fecha, edad, educacion) VALUES(?, ?, ?, ?, ?, ?, ?);";
$statement1 = $connect1->prepare($sqlInsert);
extract($data_array);
$statement1->bind_param('sssssis', $nombre, $apellido, $telefono, $email, $fecha, $edad, $educacion);
if(!empty($nombre) && !empty($apellido) && !empty($telefono) && !empty($email) && !empty($fecha) && !empty($edad) && !empty($educacion)){
    $statement1->execute();
    HEADER('Location: ../index.php');
}

/* ->num_rows; ->rowCount();  ->affected_rows; */
/* ->fetch();  ->fetchAll();  ->fetch_assoc()['']; ->get_result(); */

?>
