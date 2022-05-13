    <footer class="footer-area bg-emtech">
        <div class="container-fluid">
            <div class="flot footer-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <ul style="margin: 0; padding: 0;">
                            <li style="list-style: none;"><span class="copyright" style="color: #000000;">© Copyright FIMPES Digital 2022 I Powered by Emtech Institute I Sponsored by Santander universidades</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-bottom-menu">
                            <ul>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul class="social-link-bg" style="margin: 0; padding: 0;">
                            <li style="list-style: none;">
                                <img src="<?=base_url('assets/images/emtech-st-f.svg') ?>" alt="Logo Image" style="width:16rem"/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area -->
    <!--Scroll to top-->
    <a href="#" class="scrollToTop">
        <img src="assets/images/##" alt="">
    </a>

    <script src="<?= base_url('assets/js/plugin/jquery-3.5.0.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/bootstrap.min.js') ?>"></script>
    <!-- TweenMax -->
    <script src="<?= base_url('assets/js/plugin/TweenMax.min.js') ?>"></script>
    <!-- ScrollMagic -->
    <script src="<?= base_url('assets/js/plugin/ScrollMagic.js') ?>"></script>
    <!-- animation.gsap -->
    <script src="<?= base_url('assets/js/plugin/animation.gsap.js') ?>"></script>
    <!-- debug.addIndicators -->
    <script src="<?= base_url('assets/js/plugin/debug.addIndicators.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/jquery.counterup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/jquery.paroller.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('slick/slick.min.js') ?>"></script>
    
    <!-- <script src="<?=base_url('assets/slide/src/js/lightslider.js')?>"></script> -->

<div class="modal fade bd-example-modal-sm" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content" style="padding-right:18px;background-color:#EDEFF2;border:0px;color:#212424;line-height:normal">
        <ul style="list-style: url('../assets/img/curN.png') inside;">
             <li class="pt-4">Podrás indicarnos que te interesa este crédito durante la aplicación al programa.</li>
             <li class="pt-2">Una vez seas aceptado, tu ejecutivo te dará toda la información para solicitarlo formalmente.</li>
             <li class="pt-2">Este crédito está sujeto a aprobación según los criterios de Banco Santander.</li>
             <li class="pt-2">En caso de que tu crédito sea aprobado recibirás la notificación durante el segundo mes del curso. </li>
        </ul>
    </div>
  </div>
</div>     
<script>
      var peds = {};

      peds.base = {
        url : '<?= base_url(); ?>'
      };
</script>
<script type="application/javascript">
function code() {
  $('#modalInfo').modal('show')
  //var popup = document.getElementById("myPopup");
  //popup.classList.toggle("show");
}
          
      $(document).ready(function(){
    

        $('.carruselRequisitos').slick({
        //   dots: true,
        //   infinite: true,
        //   slidesToShow: 3,
        //   slidesToScroll: 3,
        //   arrows : false
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll:  3,
          responsive: [
            {
              breakpoint: 1064,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 780,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ],
          arrows: false
        });
    });
</script>
<?php if (isset($scriptDatatable)){ echo $scriptDatatable; }  ?>
<?php if(isset($scriptVista)){ echo $scriptVista; } ?>
</body>

</html>