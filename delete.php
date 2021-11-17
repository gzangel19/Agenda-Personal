<?php 

    session_start();

    include_once('conexion.php');

    if (isset($_GET['id'])) {
        
        $database = new Connection();
        
        $db = $database->open();
        

        try {
            
            $id = $_GET['id'];

            $sql = "DELETE FROM personas WHERE id = '$id'";

            $_SESSION['message']=($db->exec($sql)) ?'Contacto Borrado Correctamente' : 'Algo Salio Mal';
        
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