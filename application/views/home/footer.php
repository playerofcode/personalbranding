<footer class="bg-dark">
      <div class="bg-dark py-5 text-white">
        <div class="container">
          <div class="row py-5">
            <div class="col-lg-4 col-md-6"><img class="mb-4" src="img/logo-white.svg" alt="" width="200">
              <p class="text-muted text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <p class="mb-1"><i class="fas fa-envelope mr-3 text-primary fa-fw"></i><span class="text-small text-muted">Construction@example.com</span></p>
              <p class="mb-1"><i class="fas fa-mobile mr-3 text-primary fa-fw"></i><span class="text-small text-muted">+535 421 895 6523</span></p>
              <p class="mb-1"><i class="fas fa-map-marker-alt mr-3 text-primary fa-fw"></i><span class="text-small text-muted">1798 Pretty View Lane, California</span></p>
            </div>
            <div class="col-lg-2 col-md-6">
              <h5 class="mt-3 mb-4 font-weight-normal">Quick links</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="footer-link" href="<?php echo base_url(); ?>">Home</a></li>
                <li class="mb-2"><a class="footer-link" href="<?php echo base_url('home/about'); ?>">About</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Services</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Contacts</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Pages</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6">
              <h5 class="mt-3 mb-4 font-weight-normal">Our services</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="footer-link" href="#">Make Appointment</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Customer Services</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Department Service</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Our Case Studies</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Free Consultation</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Meet Our Experts</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6">
              <h5 class="mt-3 mb-4 font-weight-normal">Latest news</h5>
              <ul class="list-unstyled mb-0">
                <li class="d-flex mb-4">
                  <div class="pr-2"><img src="<?php echo base_url('assets/'); ?>img/blog-thumb-1.jpg" alt="" width="60"></div>
                  <div class="ml-3">
                    <p class="small text-muted mb-0">May 01, 2019 </p>
                    <h6 class="text-light font-weight-normal mb-0">Successful Growth In Business 2018</h6><a class="reset-anchor text-primary text-small" href="#">Read more<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </li>
                <li class="d-flex">
                  <div class="pr-2"><img src="<?php echo base_url('assets/'); ?>img/blog-thumb-2.jpg" alt="" width="60"></div>
                  <div class="ml-3">
                    <p class="small text-muted mb-0">May 01, 2019 </p>
                    <h6 class="text-light font-weight-normal mb-0">Successful Growth In Business 2018</h6><a class="reset-anchor text-primary text-small" href="#">Read more<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-darker py-4">
        <div class="container text-center">
          <p class="mb-0 text-muted text-small">&copy; All rights reserved.Developed by <a href="#">CMJKPYYA</a>. </p>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="<?php echo base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/');?>vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/');?>vendor/modal-video/js/modal-video.js"></script>
    <script src="<?php echo base_url('assets/');?>vendor/leaflet/leaflet.js"></script>
    <script src="<?php echo base_url('assets/');?>js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>