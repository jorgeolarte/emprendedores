<!-- Formulario registro -->
<div class="bg-secondary text-light text-center" id="inscribirse">
    <div class="py-4 container">
        <div class="row">
            <div class="col-md-12 ">
                <form action="data/registrar-evento.php" id="form-registrar-evento" method="post" class="form-inline justify-content-center">
                    <div class="form-group mb-2">
                        <label for="telefono" class="lead">Exclusivo para emprendedores, inscríbete ya&nbsp;</label>
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <div class="input-group-text font-weight-bold"><img src="img/colombia.png"> +57</div>
                            </div>
                            <input type="number" class="form-control form-control-lg" id="telefono" name="telefono" pattern="[0-9]{10}" placeholder="Teléfono" required title="Solo números, elimina los espacios y cualquier otro caracter diferente">
                            <div class="input-group-append">
                                <button type="submit" id="enviar" class="btn btn-primary animated infinite pulse"><i class="far fa-paper-plane"></i> Inscríbete</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="evento_id" id="evento_id" value="<?= $evento_id ?>">
                </form>
                <div class="alert alert-primary my-0 text-center" role="alert" id="resp">
                    Este es un mensaje de confirmación
                </div>
            </div>
        </div>
    </div>
</div>