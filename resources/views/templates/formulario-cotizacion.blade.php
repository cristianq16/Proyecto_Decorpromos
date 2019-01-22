


<!--Modal-->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="modal fade" id="fm-modal" tabindex="-1" role="dialog" area-labelledby="fm-modal" area-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-header">
                                <h3 class="modal-title">Cotizacion</h3>
                                <button class="close" data-dismiss="modal" aria-label="Cerrar" id="cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <form id="modalForm" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nombre">Nombre y apellido</label>
                                        <input required type="text" class="form-control" id="nombre" placeholder="Nombre"
                                            name="nombre">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="ciudad">Ciudad</label>
                                        <input required type="text" class="form-control" id="ciudad" placeholder="Ciudad" name="ciudad">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="barrio">Barrio</label>
                                        <input required type="text" class="form-control" id="barrio" placeholder="Barrio" name="barrio">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="telefono">Telefono</label>
                                        <input required type="number" class="form-control" id="telefono" placeholder="Telefono" name="telefono">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="email">Correo electronico</label>
                                        <input required type="email" class="form-control" id="email" placeholder="Correo electronico" name="email">
                                    </div>
                                </div>
                
                                <div class="form-row">
                                    <div class="form-group col-md-3 mb-0">
                                        <label for="medidas">¿Ya tiene las medidas?</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-check">
                                                <input required class="form-check-input" type="radio"  name="medidas" value="si">
                                                <label class="form-check-label" for="si">
                                                    Si
                                                </label>
                                            </div>
                                        
                                        
                                            <div class="form-check">
                                                <input required class="form-check-input" type="radio"  name="medidas" value="no">
                                                <label class="form-check-label" for="no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="uso">Uso</label>
                                        <select required id="uso" class="form-control" name="uso" placeholder="">
                                            <option value="Residencial / Hogar">
                                                Residencial / Hogar
                                            </option>
                                            <option value="Comercial / Almacén / Local">
                                                Comercial / Almacén / Local
                                            </option>
                                            <option value="Institucional / Empresarial">
                                                Institucional / Empresarial
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="informacion">¿que desea cotizar?</label>
                                        <textarea type="text" rows="3" class="form-control" id="informacion" placeholder="Que desea cotizar..." name="informacion"></textarea>
                                    </div>
                                </div>
                                
                                <div class= "carga hidden"></div>
                                <input required name="enviar" id="enviar" class="button button2" value="Enviar datos">
                                <div class="alert alert-primary" role="alert" id="mensaje">En menos de 24 horas nos pondremos en contacto, gracias.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal-->