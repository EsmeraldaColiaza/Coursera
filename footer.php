<!-- Footer -->
<footer class="text-center">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <div>
   
    <a href="https://www.facebook.com/Coursera" class="fa fa-facebook social-icon" title="Facebook" target="_blank"></a>
    <a href="https://x.com/coursera" class="fa fa-twitter social-icon" title="Twitter" target="_blank"></a>
    <a href="https://www.linkedin.com/company/coursera" class="fa fa-linkedin social-icon" title="LinkedIn" target="_blank"></a>
    <a href="https://www.youtube.com/user/coursera" class="fa fa-youtube social-icon" title="YouTube" target="_blank"></a>
    <a href="https://www.instagram.com/coursera/" class="fa fa-instagram social-icon" title="Instagram" target="_blank"></a>
    <a href="https://www.tiktok.com/@coursera" class="fa fa-pinterest social-icon" title="Pinterest" target="_blank"></a>
  </div>

  <br>
  <p>© 2025 Coursera Inc. <a href="https://www.coursera.org/" data-toggle="tooltip" title="Visit w3schools"> Todos los derechos reservados.</a></p>
</footer>


<script>
$(document).ready(function(){
  
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Smooth scroll
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
    }
  });
})
</script>
</html>
