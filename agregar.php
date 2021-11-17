<?php 

    session_start();

    include_once('conexion.php');

    if (isset($_POST['add'])) {
        
        $database = new Connection();
        
        $db = $database->open();
        
        try {
            
            $stmt = $db->prepare("INSERT INTO personas (Nombre, Telefono, Correo, Direccion) VALUES (:nombre, :celular, :email, :direccion)");
            
            $_SESSION['message']=($stmt->execute(array(':nombre'=>$_POST['nombre'],':celular'=>$_POST['celular'],':email'=>$_POST['email'],':direccion'=>$_POST['direccion']))) ? 'Contacto agregado correctamente' : 'Algo Salio mal, No se pudo agregar el contacto';
        
        } 
        
        catch (PDOException $e) {
        
            $_SESSION['message']= $e->getMessage();
        
        }
        
        $database->close();

    }
    else{

        $_SESSION['message']= 'Rellene El Formulario';

    }

    header('location: index.php');

?>