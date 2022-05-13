<link rel="stylesheet" href="<?= base_url(); ?>assets/images/pays/estilo_pay.css">
<!-- SWEET ALERT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- SDK MercadoPago.js V2 -->
<script src="https://sdk.mercadopago.com/js/v2"></script>


<main>
    <section class="admin-content">
        <div class="w-100">
            <div class="">
                <div class="w-100 d-flex align-items-center flex-column">
                    <img src="<?= base_url(); ?>assets/images/pays/background 1.png" alt="Encabezado" class="w-100 encabezado">
                    <div class="col-lg-10 dlab-info d-flex flex-column contenedor container">
                        <div class="w-100 text-center" style="padding: 1rem 0 0;">
                            <h3 class="head-pago">Pago</h3>
                        </div>
                        <hr class="w-100 divicion-head">
                        <div class="d-flex row flex-wrap" style="margin-bottom: 3rem;">

                            <div class="col-lg-12 primer-tab">
                                <div class="d-flex justify-content-center" style="margin: 3rem 0;">
                                    <img src="<?= base_url(); ?>assets/images/pays/uno-inactivo.png" id="img1" class="num-travel">
                                    <hr class="hr-travel">
                                    <img src="<?= base_url(); ?>assets/images/pays/dos-inactivo.png" id="img2" class="num-travel">
                                    <hr class="hr-travel">
                                    <img src="<?= base_url(); ?>assets/images/pays/tres-activo.png" id="img3" class="num-travel">
                                </div>

                                <div class="col-lg-12" id="parte3">
                                    <h4 class="apartado-1">3.Pago confirmado</h4>
                                    <div class="d-flex justify-content-between">
                                        <div class="w-30">
                                            <div class="dummy-positioning d-flex">
                                                <div class="success-icon">
                                                    <div class="success-icon__tip"></div>
                                                    <div class="success-icon__long"></div>
                                                </div>                                        
                                            </div>
                                        </div>
                                        <div class="w-60">
                                            <p>Curso: <b>a</b></p>
                                            <p>Monto: <b>s</b> </p>
                                            <p>Fecha: <b>d</b></p>
                                            <p>Correo: <b>f</b></p>
                                            <p>Id de pago: <b>s</b></p>
                                        </div>
                                    </div>
                                </div><!-- Primera parte -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .mercadopago-button{
                width: 231px !important; 
                background-color: #F57C20 !important; 
                color: white !important; 
                font-size: 20px !important; 
                padding: 1rem !important; 
                border-radius: 51px !important;
            }
        </style>
    </section>
</main>