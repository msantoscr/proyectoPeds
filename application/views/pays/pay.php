<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <main>
        <section class="banner-area" style="background-image: url('<?= base_url("assets/images/pays/background 1.png") ?>');background-color:#F7F8FA;background-size:cover; background-repeat: no-repeat;">
            <div class="container" style="position: relative;z-index: 1;">
            </div>
        </section>

        <section id="curso" class="more-features-area pb-80 bg-white">
            <div class="container" style="margin-top: -6rem;position: relative;z-index: 2;">
                <div class="row equal-cols espacio-cards" style="display: flex;">
                    <div class="col-lg-12 col-md-12 col-xs-12"> 
                        <div class="fea-item wow fadeInUp" data-wow-delay="0.1s" style="border-radius: 10px;visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;background-color:#FFF">
                            <div class="container" style="margin-bottom: 25px;">    
                                <div class="row content">
                                    <div class="col-lg-12 col-md-12 col-xs-12 text-center" style="padding: 0.9rem;">
                                        <h2 style="color:#1D2856;font-size:2rem" id="titulo-pago">Inscripción</h2>
                                    </div>                                    
                                    <hr class="w-100 division-head" style="margin-bottom:0px">
                                </div>
                                <div class="row content">
                                    <!-- Lado izquiero - FORMULARIO -->
                                    <div class="col-lg-7 col-md-7 col-xs-12 borde-derecho"  id="parte1">
                                        <div class="row margen-inscripcion">
                                            <div class="pt-2 mb-5 col-lg-6 col-xs-12">
                                                <div class="d-flex iconos-pasos">
                                                    <img src="<?= base_url(); ?>assets/images/pays/uno-activo.png" id="img1" class="num-travel">
                                                    <hr class="hr-travel">
                                                    <img src="<?= base_url(); ?>assets/images/pays/dos-inactivo.png" id="img2" class="num-travel">
                                                </div>                                                
                                            </div>
                                            
                                            <h4 class="pb-4 apartado-1">1. Información</h4>
                                            <div class="d-flex justify-content-between">
                                                <div class="col-lg-5">
                                                    <label>Nombre (s)*</label>
                                                    <input class="input-apartado-1" type="text" name="nombre" id="nombre" require>
                                                </div>
                                                <div class="col-lg-7" style="padding-left:1rem">
                                                    <label>Apellido (s)*</label>
                                                    <input class="input-apartado-1" type="text" name="apellido" id="apellido" require>
                                                </div>
                                            </div>
                                        
                                            <div class="col-lg-12 pt-4">
                                                <label>Universidad*</label>
                                                <input list="universidad_list" class="input-apartado-1" type="text" name="universidad" id="uni">
     											<datalist id="universidad_list">
                                                    <?php 
                                                    foreach ($universidadesList as $uni) {?>
                                                       <option values="<?= $uni['universidad']?>"><?= $uni['universidad']?></option>
                                                    <?}?>
    											</datalist>                                           
                                            </div>
                                            <div class="col-lg-12 pt-4">
                                                <label>Número de celular*</label>
                                                <input class="input-apartado-1" type="text" name="telefono" id="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                            </div>
                                            <div class="col-lg-12 pt-4">
                                                <label>Correo electrónico*</label>
                                                <input class="input-apartado-1" type="email" name="correo" id="mail" require>
                                            </div>
                                            <div class="col-lg-5 pt-4">
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
                                            <div class="col-lg-12 d-flex align-items-center" style="margin-top:2rem;">
                                                <button class="btn-siguente btn btn-naranja" onclick="siguente();"><b>Siguiente</b></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Lado izquiero - DATOS TRANSFERENCIA -->
                                    <div class="col-lg-7 col-md-7 col-xs-12 borde-derecho" style="display:none" id="parte2">
                                        <div class="row margen-inscripcion">
                                            <div class="pt-2 mb-5 col-lg-6 col-xs-12">
                                                <div class="d-flex iconos-pasos">
                                                    <img src="<?= base_url(); ?>assets/images/pays/uno-inactivo.png" id="img1" class="num-travel">
                                                    <hr class="hr-travel">
                                                    <img src="<?= base_url(); ?>assets/images/pays/dos-activo.png" id="img2" class="num-travel">
                                                </div>                                                
                                            </div>
                                            
                                            <div class="row pb-4">
                                                <div class="col-9 transfer-iconoP">
                                                    <h4 class="apartado-1">2. Transferencia Bancaria</h4>
                                                </div>
                                                <div class="col-3 transfer-iconoP">
                                                    <img class="d-block my-auto"  src="<?=base_url('assets/images/transfer-icon.svg')?>" alt="Icono"/>
                                                </div>                                                 
                                            </div>
                                           
                                            
                                            <div class="col-lg-12">
                                                <div class="card" style="background: #F7F7F7;border-radius: 6px;">
                                                    <div class="card-body" style="line-height:21.92px;padding:2.2rem;">
                                                        <p>
                                                            Realiza tu pago directamente en nuestra cuenta bancaria. <br>
                                                            El pedido no quedará registrado hasta que el importe completo haya sido recibido en nuestra cuenta. 
                                                        </p>
                                                        <p class="mt-3">
                                                            Una vez hecha la transferencia envía el recibo de pago a <span class="font-Novbold"><a href="mailto:irvin.toledo@emtech.digital" style="color:#000">irvin.toledo@emtech.digital</a></span> 
                                                        </p>
                                                        <p class="mt-3">
                                                            <span class="font-Novbold">DATOS BANCARIOS:</span>
                                                        </p>
                                                        <p class="mt-3 pb-3">
                                                            <span class="font-Novbold">Banco:</span> BBVA
                                                            <br>
                                                            <span class="font-Novbold">Nombre:</span> TREP CAMP SA PI DE CV
                                                            <br>
                                                            <span class="font-Novbold">Clabe:</span> 012180001958827530
                                                            <br>
                                                            <span class="font-Novbold">Nº de cuenta:</span> 0195882753                                                            
                                                        </p>                                                        
                                                        
                                                        <hr style="border: 0.5px solid #000000;width: 100%;opacity:1;margin:20px 0">
                                                        
                                                        <p class="pt-3">
                                                            <span class="font-Novbold">Si recibiste un cupón de descuento o tienes dudas, contáctanos por Whatsapp o agenda una llamada con uno de nuestros agentes.</span>
                                                        </p>
                                                        <div class="pt-3 row">
                                                            <div class="col-4">
                                                                <a href="https://api.whatsapp.com/message/GU7YAAOUSS3AP1" target="_blank"><img class="d-block"  src="<?=base_url('assets/images/whatsapp-C.svg')?>" alt="Icono"/></a>
                                                            </div>
                                                            <div class="col-4">
                                                                <a href="https://calendly.com/irvin-toledo/30min" target="_blank"><img class="d-block"  src="<?=base_url('assets/images/calendly-C.svg')?>" alt="Icono"/></a>
                                                            </div>                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        

                                        </div>
                                    </div>                                    
                                    
                                    <!-- Lado derecho -->
                                    <div class="col-lg-5 col-md-5 col-xs-12 borde-alto-curso">
                                        <div class="row margen-inscripcion">
                                            <p class="pt-4 head-info">
                                                <span class="font-Novbold"><b><?= $curso; ?></b></span>
                                            </p>
                                            <div style="margin: 0px 0 3rem 0;">
                                                <p style="line-height:21.92px;">
                                                    Modalidad: <?= $modalidad; ?><br>
                                                    Duracion: <?= $duracion; ?><br>
                                                    Fecha del curso: <span id="fecha-seleted"></span>
                                                </p>
                                               <!-- <a href="#" class="eliminar-tag">Eliminar</a href="#"> -->
                                            </div>
                                            
                                            <div>
                                              <!--  <div class="total-pago info-tar">
                                                    <span class="label-total font-Novbold"><b>Costo</b></span>
                                                    <span class="label-total font-Novbold">$<?= number_format($precio) ?></span>
                                                </div> -->
                                                <!--
                                                <div class="total-pago info-tar">
                                                    <span class="label-total-tarj">IVA 16%</span>
                                                    <span class="label-total" id="comision-span">33</span>
                                                </div>
                                                -->
                                                <hr class="w-100 info-tar" style="display: none;">
            
                                                <div class="total-pago-final mt-4">
                                                        <span class="my-auto label-total font-Novbold" style="padding-left:0.7rem"><b>Total </b></span>
                                                        <span class="my-auto label-total font-Novbold" style="padding-right:0.7rem"><b id="total-real">$</b></span>
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

        //console.log(full_fields);

        if (full_fields == 6) {
            /* Guardar formulario */
            //generamos un objeto que se enviará al controlador
            let model = {
                'nombre': $("#nombre").val().trim(),
                'apellido': $("#apellido").val().trim(),
                'universidad': $("#uni").val().trim(),
                'telefono': $("#tel").val().trim(),
                'correo': $("#mail").val().trim()
            };
            //realizamos petición para guardar la información del formulario
            $.post(peds.base.url + "guardar", model, "JSON").done(function(){});
            
            
            $('#parte1').fadeToggle();
            $('#parte2').fadeToggle();
            $('#titulo-pago').text('Datos de Pago');

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
                title: 'Completa todos los campos para continuar'
            }).then(function() {
                $('.input-apartado-1').css('border', '1px solid #C4C4C4');
            });
        }
    }


    let precio_curso = <?= $precio ?>;
    let comision = precio_curso * .05;
    let precioF = precio_curso + comision;
    let descuento = 0;
    $('#total-real').text('$' + Intl.NumberFormat('en-IN').format(precio_curso) + ' + IVA');
    

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
            
            $("#descuento-btn").css("background-color", "#C4C4C4");

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
            
            $("#descuento-btn").css("background-color", "#C4C4C4");

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
            const mp = new MercadoPago('APP_USR-d9aa755a-2a1a-499f-a787-d613ca7c687d', {
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
