<section class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Únete a nuestra comunidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="data/registro-emprendedor-evento.php" id="form-registro-modal" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Escribe tu nombre..." required="required" type="text" name="text-nombre" id="text-nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Nombre de tu emprendimiento..." required="required" name="text-emprendimiento" id="text-emprendimiento">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text font-weight-bold"><img src="img/colombia.png"> +57</div>
                        </div>
                        <input type="text" class="form-control form-control-lg" pattern="[0-9]{10}" placeholder="Teléfono celular" required="required" name="text-telefono" id="text-telefono" readonly>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" placeholder="Correo electrónico" required="required" name="text-email" id="text-email">
                    </div>
                    <input type="hidden" name="id_evento" id="id_evento" value="7">
                    <div class="alert alert-primary mb-0 text-center" role="alert" id="resp-modal">
                        A simple primary alert—check it out!
                    </div>
                    <p class="pt-1 m-0"><i><i class="fas fa-key"></i> Tu información está a salvo</i></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-lg btn-danger"><i class="fa fa-user fa-fw"></i> Regístrate</button>
                </div>
            </form>
        </div>
    </div>
</section>