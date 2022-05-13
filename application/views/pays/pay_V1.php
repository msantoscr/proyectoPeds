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

                            <div class="col-lg-6 primer-tab">
                                <div class="d-flex justify-content-center" style="margin: 3rem 0;">
                                    <img src="<?= base_url(); ?>assets/images/pays/uno-activo.png" id="img1" class="num-travel">
                                    <hr class="hr-travel">
                                    <img src="<?= base_url(); ?>assets/images/pays/dos-inactivo.png" id="img2" class="num-travel">
                                    <hr class="hr-travel">
                                    <img src="<?= base_url(); ?>assets/images/pays/tres-inactivo.png" id="img3" class="num-travel">
                                </div>

                                <div class="col-lg-12" id="parte1">
                                    <h4 class="apartado-1">1.Información</h4>
                                    <div class="d-flex justify-content-between">
                                        <div class="w-40">
                                            <label>Nombre (s)*</label>
                                            <input class="input-apartado-1" type="text" name="nombre" id="nombre" require>
                                        </div>
                                        <div class="w-60" style="padding-left:1rem">
                                            <label>Apellido (s)*</label>
                                            <input class="input-apartado-1" type="text" name="apellido" id="apellido" require>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mt-2">
                                            <label>Universidad*</label>
                                            <input class="input-apartado-1" type="text" name="universidad" id="uni">
                                        </div>
                                        <div class="mt-2">
                                            <label>Número de celular*</label>
                                            <input class="input-apartado-1" type="text" name="telefono" id="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                        </div>
                                        <div class="mt-2">
                                            <label>Correo electrónico*</label>
                                            <input class="input-apartado-1" type="email" name="correo" id="mail" require>
                                        </div>
                                        <div class="mt-2 w-45">
                                            <label>Fecha de inicio*</label>
                                            <select name="fecha" id="c1" class="select-fecha input-apartado-1">
                                                <option value=""></option>
                                                <?php 
                                                foreach ($fechasInicio as $fecha) {?>
                                                   <option value="<?= $fecha['Id']?>"><?= $fecha['Descripcion']?></option>
                                                <?}?>
                                            </select>
                                        </div>
                                        <!--
                                        <div class="w-100 d-print-inline-block">
                                            <input type="checkbox" class="w-10"><span>Acepto <a style="color:#F57C20;" href="#">términos y condiciones</a></span>
                                        </div>
                                        <div class="w-100 d-print-inline-block">
                                            <input type="checkbox" class="w-10"><span>He leído <a style="color:#F57C20;" href="#">aviso de privacidad</a></span>
                                        </div>
                                        -->
                                        <div class="w-50 d-flex align-items-center" style="margin-top:2rem;">
                                            <button class="btn-siguente" onclick="siguente();"><b>Siguiente</b></button>
                                        </div>
                                    </div>
                                </div><!-- Primera parte -->

                                <div class="col-lg-12" id="parte2" style="display: none;">
                                    <h4 class="apartado-2 b1">2.Métodos de pago</h4>
                                    <a href="#" class="comision">Costo por comisión</a>

                                    <div>
                                        <div class="transferencia">
                                            <a href="#" onclick="tranferecia();" style="color:black; justify-content: space-between;" class="w-100 d-print-inline-flex align-items-center">
                                                <div class="w-60 d-print-inline-flex align-items-center">
                                                    <input type="radio" id="radio-trans" style="width: 8%;">
                                                    <p class="fsz-20">Transferencia bancaria</p>
                                                </div>
                                                <div>
                                                    <img src="<?= base_url(); ?>assets/images/pays/tranferencia.svg" style="width: 43px;">
                                                </div>

                                            </a>
                                            <div id="info-trans" style="display: none;">
                                                <hr class="w-100">
                                                <div class="info-trans">
                                                    <img src="<?= base_url(); ?>assets/images/pays/trans-icon.svg" alt="icon" style="width: 43px; margin: -9px 40px 0 15px;">
                                                    <p style="font-size: 16px;">Para realizar tu pago mediante transferencia bancaria por favor ponte en contacto con Irvin Toledo, uno de nuestros ejecutivos. Puedes contactarle vía <a href="https://api.whatsapp.com/message/GU7YAAOUSS3AP1" target="_blank"><b style="color: #F57C20;">WhatsApp</b></a>, correo electrónico <b style="color: #F57C20;">(irvin.toledo@emtech.digital)</b> o agendar una llamada con él <a href="https://calendly.com/irvin-toledo/30min" target="_blank" style="color: #F57C20;">aquí.</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tarjetas">
                                            <a href="#" onclick="tarjetas();" style="color:black; justify-content: space-between;" class="w-100 d-print-inline-flex align-items-center">
                                                <div class="w-100 d-print-inline-flex align-items-center">
                                                    <input type="radio" id="radio-tar" style="width: 8%;">
                                                    <span class="fsz-20 d-print-inline-flex">Crédito o débito <span style="font-size: 10px;padding-left:0.5rem">(Hasta 12 pagos fijos)</span></span>
                                                </div>
                                                <div>
                                                    <img src="<?= base_url(); ?>assets/images/pays/tarjeta.svg" style="width: 43px;">
                                                </div>
                                            </a>
                                            <div class="info-tar" style="display: none;">
                                                <!-- style="display: none;" -->
                                                <hr class="w-100">
                                                <div class="info-tarj">
                                                    <p>Total</p>
                                                    <p>$<?= number_format($precio) ?></p>
                                                </div>
                                                <hr class="w-100">
                                                <div class="info-tarj">
                                                    <p>Descuento FIMPES</p>
                                                    <p id="descuento-aplicado"></p>
                                                </div>
                                                <hr class="w-100">
                                                <div class="info-tarj">
                                                    <p>Total pedido</p>
                                                    <p><b id="total-pedido"></b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-tar" style="margin-top: 1rem; display: none;">
                                            <input type="text" name="descuento" class="descuento-field" id="descuento" placeholder="Ingresa código de promoción">
                                            <button onclick="aplicarDescuento();" class="descuento-btn" id="descuento-btn" style="margin-left:0.6rem">Aplicar</button>
                                        </div>
                                        <p style="font-size:14px; color:#00215B; font-style: italic; margin-top:.5rem;"><b id="resp-descuento"></b></p>
                                    </div>
                                </div><!-- Segunda parte -->

                            </div>

                            <div class="col-lg-6 segundo-tab">
                                <p class="head-info">
                                    <span class="font-Novbold"><b><?= $curso; ?></b></span>
                                </p>
                                <div style="margin: 0px 0 3rem 0;">
                                    <p>
                                        Modalidad: <?= $modalidad; ?><br>
                                        Duracion: <?= $duracion; ?><br>
                                        Fecha del curso: <span id="fecha-seleted"></span>
                                    </p>
                                   <!-- <a href="#" class="eliminar-tag">Eliminar</a href="#"> -->
                                </div>
                                <div>
                                    <div class="total-pago info-tar" style="display: none;">
                                        <span class="label-total font-Novbold"><b>Curso</b></span>
                                        <span class="label-total font-Novbold">$<?= number_format($precio) ?></span>
                                    </div>
                                    <div class="total-pago info-tar" style="display: none; margin-top: -30px;">
                                        <span class="label-total-tarj">Descuento FIMPES</span>
                                        <span class="label-total" id="descuento-aplicado-tab2"></span>
                                    </div>
                                    <div class="total-pago info-tar" style="display: none;">
                                        <span class="label-total-tarj">Comision 5%</span>
                                        <span class="label-total" id="comision-span"></span><!-- Esta estatico si se mejora seria hacer en el back -->
                                    </div>
                                    <hr class="w-100 info-tar" style="display: none;">

                                    <div class="total-pago-final">
    
                                        <span class="label-total font-Novbold"><b>Total </b></span>
                                        <span class="label-total font-Novbold"><b id="total-real">$</b></span>
                                    </div>

                                    <div class="mercado-icon info-tar" style="display:none">
                                        <img src="<?= base_url(); ?>assets/images/pays/mercado-logo.svg" alt="mercado libre" style="width: 140px">
                                        <button class="btn-siguente" id="preferencia" onclick="pagar_mercadopago();" style="margin-top: 1rem;"><b>Pagar</b></button>
                                        <div id="btnPagar" class="cho-container"></div>
                                    </div>
                                </div>

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
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modal_pago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    </section>
</main>



<script>
    let fechaInicio = $('#c1 option:selected').val();
    $('#c1').change(function() {
        let fecha = $('#c1 option:selected').text();
        console.log(fecha);
        //$('#fecha-seleted').text("");
        $('#fecha-seleted').text(fecha);
    });


    const set_date = () => {
        //alert('asdasdfas');
        let fecha = $('#' + <?= $id ?> + ' option:selected').val();
        console.log(fecha);
        //$('#fecha-seleted').text("");
        $('#fecha-seleted').text();
    }

    const siguente = () => {
        const inputFeilds = document.querySelectorAll(".input-apartado-1");
        let full_fields = 0;
        /* campos vacios */
        let invalidInputs = [];
        invalidInputs = Array.from(inputFeilds).filter(input => input.value == "");
        for (let i = 0; i < invalidInputs.length; i++) {
            $('#' + invalidInputs[i].id).css('border', '1px solid red');
        }

        /* campos llenos */
        let validInputs = [];
        validInputs = Array.from(inputFeilds).filter(input => input.value !== "");
        for (let i = 0; i < validInputs.length; i++) {
            full_fields += 1;
            console.log(validInputs[i].text);
        }

        console.log(full_fields);

        if (full_fields == 6) {
            //pasa el form
            $('#img1').attr({
                src: '<?= base_url(); ?>assets/images/pays/uno-inactivo.png'
            });
            $('#img2').attr({
                src: '<?= base_url(); ?>assets/images/pays/dos-activo.png'
            });

            $('#parte1').fadeToggle();
            $('#parte2').fadeToggle();

        } else {
            const Toast = Swal.mixin({
                toast: true,
                position: 'center-start',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: 'Revisa que los campos estén llenos.'
            }).then(function() {
                $('.input-apartado-1').css('border', '1px solid #C4C4C4');
            });
        }
    }


   
    let precio_curso = <?= $precio ?>;
    let comision = precio_curso * .05;
    let precioF = precio_curso + comision;
    let descuento = 0;
    $('#total-real').text('$' + Intl.NumberFormat('en-IN').format(precio_curso));
    

    const tranferecia = () => {
        if ($('#radio-tar').prop("checked")) {
            $('#radio-tar').prop("checked", false);
            $('.info-tar').slideToggle("slow");
        }
        if ($('#radio-trans').prop("checked")) {
            $('#radio-trans').prop("checked", false);
        } else {
            $('#radio-trans').prop("checked", true);

        }
        $('#info-trans').slideToggle("slow");

        $('#total-real').text('$' + Intl.NumberFormat('en-IN').format(precio_curso));
    }

    const tarjetas = () => {
        if ($('#radio-trans').prop("checked")) {
            $('#radio-trans').prop("checked", false);
            $('#info-trans').slideToggle("slow");
        }
        if ($('#radio-tar').prop("checked")) {
            $('#radio-tar').prop("checked", false);
        } else {
            $('#radio-tar').prop("checked", true);
        }
        $('.info-tar').slideToggle("slow");


        $('#total-real').text('$' + Intl.NumberFormat('en-IN').format(precioF));
        $('total-pedido').text('$' + Intl.NumberFormat('en-IN').format(precio_curso));
        $('#comision-span').text('$' + Intl.NumberFormat('en-IN').format(comision));
    }

    const aplicarDescuento = () => {
        let codigo = $('#descuento').val();
        let nuevoTotal = 0;
        //hora y fecha
        let hoy = new Date();
        let fecha = hoy.getDate() + '-' + (hoy.getMonth() + 1) + '-' + hoy.getFullYear();
        let hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
        let fechaYHora = fecha + ' ' + hora;

        if (codigo == "FIMPES") { //FIMPES2022-2

            let descuento = 5000; //se pueden guardar los codigos de dscuento en una DB junto con su valor y hacerlo auntomatico
            nuevoTotal = precio_curso - descuento;

            let comision = nuevoTotal * .05;
            let total_tarjetas = precio_curso + comision;

            $('#descuento-aplicado').text('$5,000'); //se puede poner la cantidad que sea si es entero con algo asi ("$"+Intl.NumberFormat('en-IN').format(descuento))
            $('#descuento-aplicado').css('color', 'green');
            $('#total-pedido').text("$" + Intl.NumberFormat('en-IN').format(nuevoTotal));
            $('#resp-descuento').text('-' + Intl.NumberFormat('en-IN').format(descuento) + ', Código: ' + codigo + ', ' + fechaYHora + ', Aplicado a 1 especialidad');

            //tab2
            $('#descuento-aplicado-tab2').text('$5,000'); //se puede poner la cantidad que sea si es entero con algo asi ("$"+Intl.NumberFormat('en-IN').format(descuento))

            total_tarjetas -= descuento;
            precioF = total_tarjetas;

            $('#total-real').text('$' + Intl.NumberFormat('en-IN').format(total_tarjetas));

            $('#comision-span').text('$' + Intl.NumberFormat('en-IN').format(comision));

            $('#descuento-btn').attr({
                disabled: true
            });

        } else if(codigo == "CED"){
            let descuento = 9000; //se pueden guardar los codigos de dscuento en una DB junto con su valor y hacerlo auntomatico
            nuevoTotal = precio_curso - descuento;

            let comision = nuevoTotal * .05;
            let total_tarjetas = precio_curso + comision;

            $('#descuento-aplicado').text('$9,000'); //se puede poner la cantidad que sea si es entero con algo asi ("$"+Intl.NumberFormat('en-IN').format(descuento))
            $('#descuento-aplicado').css('color', 'green');
            $('#total-pedido').text("$" + Intl.NumberFormat('en-IN').format(nuevoTotal));
            $('#resp-descuento').text('-' + Intl.NumberFormat('en-IN').format(descuento) + ', Código: ' + codigo + ', ' + fechaYHora + ', Aplicado a 1 especialidad');

            //tab2
            $('#descuento-aplicado-tab2').text('$9,000'); //se puede poner la cantidad que sea si es entero con algo asi ("$"+Intl.NumberFormat('en-IN').format(descuento))
            total_tarjetas -= descuento;
            precioF = total_tarjetas

            $('#total-real').text('$' + Intl.NumberFormat('en-IN').format(total_tarjetas));

            $('#comision-span').text('$' + Intl.NumberFormat('en-IN').format(comision));

            $('#descuento-btn').attr({
                disabled: true
            });

        }else{
            $('#descuento-aplicado').text('Código no valido');
            $('#descuento-aplicado').css('color', 'red');
            $('#descuento').val(null);
        }
    }


    const pagar_mercadopago = () => {
        let mail = $('#mail').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url(); ?>Home/preferencia_MP",
            data: {
                id_curso: "<?= $id?>",
                fecha: fechaInicio,
                monto: precioF, //total a pagar 
                desc:descuento,
                comision:comision,
                precio_c: precio_curso, //precio del curso
                nombre_curso: "<?= $curso; ?>",
                correo: mail,
                
            }
        }).done(function(data) {
            //public key
            const mp = new MercadoPago('TEST-5a6bda83-a2c1-4575-987d-eba3ac15d270', {
                locale: 'es-MX' //cambiar a pesos MX o a DLLS ?
            });

            // Inicializa el checkout
            mp.checkout({
                preference: {
                    id: data
                },
                render: {
                    container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                    label: 'mercado pago', // Cambia el texto del botón de pago (opcional)
                }
            });
            $('.mercadopago-button').hide();

            $('.mercadopago-button').click();

        });
    }
</script>