<div class="modal fade" id="edit_<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog" role="document">
            
        <div class="modal-content">
              
            <div class="modal-header">
                
                <h5 class="modal-title" id="exampleModalLabel"> <span> <i class="fas fa-user-minus"></i> </span> Editar Contacto </h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:red; color:white">
                  <span aria-hidden="true">&times;</span>
                </button>
              
            </div>
              
            <div class="modal-body">
                
                <div class="container-fluid">

                    <form method="post" action="editar.php?id=<?php echo $row['id']?>">

                        <div class="row form-group">

                            <div class="col-sm-12">

                                <label class="control-label"> Nombre: </label>
                            
                                <input type="text" class="form-control" name="nombre" value="<?php echo $row['Nombre']?>"  style="margin-top:8px">
                            
                            </div>


                        </div>
                        
                        <div class="row form-group" style="margin-top:16px">

                            <div class="col-sm-12">

                                <label class="control-label"> Celular: </label>

                                <input type="tel" class="form-control" name="celular"  value="<?php echo $row['Telefono']?>"  style="margin-top:8px">

                            </div>


                        </div>
                        
                        <div class="row form-group" style="margin-top:16px">

                            <div class="col-sm-12">

                                <label class="control-label"> E-Mail: </label>

                                <input type="email" class="form-control" name="email"  value="<?php echo $row['Correo']?>" style="margin-top:8px">

                            </div>

                        </div>

                        <div class="row form-group" style="margin-top:16px">

                            <div class="col-sm-12">

                                <label class="control-label"> Direccion: </label>

                                <input type="text" class="form-control" name="direccion"   value="<?php echo $row['Direccion']?>" style="margin-top:8px">

                            </div>

                        </div>

                        <div class="modal-footer">  

                            <button type="submit" name ="edit" class="btn btn-success"> Actualizar </button>

                            <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancelar </button>
                            
                        </div>

                    </form>

                </div>

            </div>
            
        </div>
          
    </div>
        
</div>




<div class="modal fade" id="delete_<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog" role="document">
            
        <div class="modal-content">
              
            <div class="modal-header">
                
                <h5 class="modal-title" id="exampleModalLabel"> Borrar Contacto </h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:red; color:white">
                  <span aria-hidden="true">&times;</span>
                </button>
              
            </div>
              
            <div class="modal-body">

                <p class="text-center"> ¿Estas Seguro de Borrar los Datos de ? </p>

                <h2 class="text-center"> <?php echo $row['Nombre'] ?> </p>

                <div class="modal-footer">  

                    <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" name="delete"> SI </a>

                    <button type="button" class="btn btn-success" data-dismiss="modal"> No </button>
                            
                </div>
                
            </div>
            
        </div>
          
    </div>
        
</div>
