
    <main>
        <section class="banner-area" style="background-image: url('<?= base_url("assets/images/bannerPeds2.png") ?>');background-color:#F7F8FA;background-size:cover; background-repeat: no-repeat;max-height: 42rem;">
            <div class="container" style="position: relative;z-index: 1;">
                <div class="row flex-md-row align-items-center">
                </div>
            </div>
        </section>
        <section id="historial" class="section-padding wow fadeInUp animate__fast bg-emtech">
            <div class="container">
                <div class="row align-items-center flex-column-reverse flex-lg-row text-center">
                    <div class="col-lg-12">
                        <h3 class="font-Novbold banner-descripcion" style="color:#1D2856">
                            Historial                       
                        </h3>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="card text-center" style="border-radius: 0.75rem;border: none;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <div class="card-title">
                        </div>
                        <div class="card-body">
                            <div class="py-2 row content">
                                <div class="col-md-12">
                                    <select class="form-select" id="selectCurso" aria-label="select de cursos">
                                        <option value="0" selected>Alumnos sin pago de curso</option>
                                        <?php foreach ($cursos as $curso) { ?>
                                            <option value="<?= $curso['Id'] ?>"><?= $curso['Descripcion'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="card text-center" style="border-radius: 0.75rem;border: none;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        <div class="card-title">
                            <div class="pt-3 content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <select class="form-select" id="selectLenght">
                                            <option value="10" selected>10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" style="padding-right: 16rem;">
                                        <a id="btnDescargarReporteRegistros" class="btn btn-rounded btn-success" title="Descargar reporte de registros" style="font-size: 1rem;padding-left: 3rem;padding-right: 3rem;padding-bottom: 0.2rem;padding-top: 0.3rem;">
                                            <i class="fas fa-file-excel" ></i>
                                        </a>
                                    </div>  
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="py-2 row content">
                                <div class="col-md-12">
                                    <div class="table-responsive-xl">
                                        <table class="table display" id="tablaRegistros" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>Nombre</th>
                                                    <th>Universidad</th>
                                                    <th>Contacto</th>
                                                    <th>Correo</th>
                                                    <th>Fecha inicio</th>
                                                    <th>Curso</th>
                                                    <th>Precio</th>
                                                    <th>Descuento</th>
                                                    <th>Comisión</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tablaRegistros">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

