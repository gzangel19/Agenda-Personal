<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.88.1">
      <meta name="theme-color" content="#7952b3">

      <title> Agenda Personal </title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      
      <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>

    </head>
  
    <body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixer-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Agenda Personal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        
        <li class="nav-item">
        
          <a class="nav-link active" aria-current="page" href="index.php"> <span> <i class="fas fa-home"></i> </span> Home</a>
        
        </li>
        
        <li class="nav-item">
       
          <a class="nav-link" href="https://www.facebook.com/angel.gauna.9849" target="_blank"> <span> <i class="fab fa-facebook"></i> </span> Facebook </a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="https://www.linkedin.com/in/angel-guillermo-gauna-90676110a" target="_blank"> <span>  <i class="fab fa-linkedin"></i></i> </span> Linkedin </a>
          
        </li>

        <li class="nav-item">

          <a class="nav-link" href="https://twitter.com/agauna32" target="_blank"> <span>  <i class="fab fa-twitter"></i> </span> Twitter </a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href=" https://web.whatsapp.com/" target="_blank"> <span>  <i class="fab fa-whatsapp"></i> </span> Whassap </a>

        </li>

       

      </ul>

    </div>
  </div>
</nav>

<div class="container">

  <h1 class="page-header text-center" style="margin-top:16px"> Agenda de Contactos Personal </h1>

  <div class="row">

      <div class="col-sm-12">
      
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"> <span> <i class="fas fa-user-plus"></i> Nuevo </span> </button>

      </div>

      <div class="col-sm-12" style="margin-top:16px">

          <?php
          
            session_start();

            if(isset($_SESSION['message'])){

          ?>

              <div class="alert alert-dismissible alert-success">

                <button type="button" class="close btn_danger" data-dismiss="alert"> &times; </button>

                <?php  echo $_SESSION['message']; ?>

              </div>

              <?php  unset($_SESSION['message']) ?>

          <?php

            }

          ?>

      </div>

      <div class="col-md-12">

            <table class="table table-bordered table-striped" id="tableContact" style="margin-top:16px">

              <thead>

                  <th> Codigo </th>
                  <th> Nombre de Contacto </th>
                  <th> Telefono </th>
                  <th> Correo </th>
                  <th> Direccion </th>
                  <th> Opciones </th>

              </thead>

              <tbody>

                <?php 

                      include_once('conexion.php');

                      $database = new Connection();

                      $db =  $database->open();

                      try {
            
                        $sql = "SELECT * FROM personas ORDER BY id DESC";

                        foreach ($db->query($sql) as $row) {

                ?>

                    <tr>
                        <td> <?php echo $row['id'];?> </td>
                        <td> <?php echo $row['Nombre'];?> </td>
                        <td> <?php echo $row['Telefono'];?> </td>
                        <td> <?php echo $row['Correo'];?> </td>
                        <td> <?php echo $row['Direccion'];?> </td>
                        <td> 
                          
                            <a href="#edit_<?php echo $row['id']?>" class="btn btn-success" data-toggle="modal" data-target="#edit_<?php echo $row['id']?>"> <span> <i class="fas fa-user-edit"></i> </span> </a>
                            <a href="#delete_<?php echo $row['id']?>" class="btn btn-danger"  data-toggle="modal" data-target="#delete_<?php echo $row['id']?>"> <span> <i class="fas fa-user-minus"></i>  </span> </a>
                            <?php include('editarEliminarModal.php') ?>
                        </td>


                    </tr>

                <?php 

                        }

                    } 
                    
                    catch (PDOException $e) {
                    
                        echo 'Hay Problemas con la conexion : '.$e->getMessage();
                    
                    }
                    
                    $database->close();
                
                ?>

              </tbody>

            </table>

      </div>

  </div>

  <?php include('addModal.php') ?>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script type="text/javascript" src="DataTables/datatables.min.js"></script>

        <script>

          $(document).ready( function () {
              $('#tableContact').DataTable();
          } );

        </script>

        <script>

          var table = $('#tableContact').DataTable({
            
              language:{
                        "decimal": "",
                        "emptyTable": "No hay información",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                        "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
                        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "lengthMenu": "Mostrar _MENU_ Entradas",
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "search": "Buscar:",
                        "zeroRecords": "Sin resultados encontrados",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "next": "Siguiente",
                            "previous": "Anterior"
            }
        },

          });

        </script>
        

  </body>



</html>
