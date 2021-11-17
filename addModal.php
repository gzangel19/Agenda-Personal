
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog" role="document">
            
        <div class="modal-content">
              
            <div class="modal-header">
                
                <h5 class="modal-title" id="exampleModalLabel">Agregar Contacto </h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:red; color:white">
                  <span aria-hidden="true">&times;</span>
                </button>
              
            </div>
              
            <div class="modal-body">
                
                <div class="container-fluid">

                    <form method="post" action="agregar.php" id="MyFormAdd">

                        <div class="row form-group">

                            <div class="col-sm-2">
                            
                                <label class="control-label"> Nombre: </label>
                            
                            </div>

                            <div class="col-sm-10">
                            
                                <input type="text" class="form-control" name="nombre">
                            
                            </div>


                        </div>
                        
                        <div class="row form-group" style="margin-top:16px">

                            <div class="col-sm-2">

                                <label class="control-label"> Celular: </label>

                            </div>

                            <div class="col-sm-10" style="margin-top:16px">

                                <input type="tel" class="form-control" name="celular">

                            </div>


                        </div>
                        
                        <div class="row form-group" style="margin-top:16px">

                            <div class="col-sm-2">

                                <label class="control-label"> E-Mail: </label>

                            </div>

                            <div class="col-sm-10">

                                <input type="email" class="form-control" name="email">

                            </div>

                        </div>

                        <div class="row form-group" style="margin-top:16px">

                            <div class="col-sm-2">

                                <label class="control-label"> Direccion: </label>

                            </div>

                            <div class="col-sm-10">

                                <input type="text" class="form-control" name="direccion">

                            </div>

                        </div>

                        <div class="modal-footer">  

                            <button type="submit" name ="add" class="btn btn-primary"> Agregar </button>

                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="BorrarDatosForm()"> Cancelar </button>
                            
                        </div>

                    </form>

                </div>

            </div>
            
        </div>
          
    </div>
        
</div>

<script>

function BorrarDatosForm(){

    document.getElementById("MyFormAdd").reset();
    
}

</script>